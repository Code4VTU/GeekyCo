<?php

namespace App\Http\Controllers;

use App\Issue;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class IssuesController extends Controller
{
    public function create()
    {
        return view('issues.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'       => 'required|unique:issues|max:255',
            'description' => 'required|max:1500',
            'city'        => 'required',
            'zip'         => 'max:5',
            'address'     => 'max:255',
//            'photos'       => 'required|image|mimes:jpeg,jpg,png,bmp,gif,svg',
        ]);

        $user = Auth::user();

        //create
        if (!isset($user)) {
            $user = User::first();
            $request->merge(['isAnonymous' => true]);
        }

        $issue = $user->issues()->create($request->all());

        $photos = $request->file('photos');
        if (!empty($photos)) {
            foreach ($photos as $photo) {
                $filename = $photo->getClientOriginalName();
                $picture = date('His') . $filename;
                $destinationPath = base_path() . '/public/images';

                $photo->move($destinationPath, $picture);

                Image::make(sprintf('images/%s', $picture))->resize(400, 300)->save();

                $issue->photos()->create(['photo' => $picture]);
            }
        }

        flash('Успешно добавено!', 'Проблемът беше успешно добавен.', 'success');

        return redirect('issues/'.$issue->id);
    }

    public function show(Issue $issue)
    {
        return view('issues.show', [
            'issue' => $issue
        ]);
    }

    public function index(Request $request)
    {
        $issues = Issue::with('user');

        $sort = $request->get('sort');
        $city = $request->get('city');
        $query = $request->get('query');

        $zip = $request->get('zip');

        if (isset($city)) {
            $issues->whereHas('user', function ($q) use ($city) {
                $q->where('city', 'LIKE', '%' . $city . '%');
            });
        }

        if (isset($city)) {
            $issues->whereHas('user', function ($q) use ($zip) {
                $q->where('zip', 'LIKE', '%' . $zip . '%');
            });
        }

        if (!empty($query)) {
            $issues->whereHas('user', function ($q) use ($query) {
                $q->where('users.name', 'LIKE', '%' . $query . '%')
                    ->orWhere('issues.title', 'LIKE', '%' . $query . '%')
                    ->orWhere('issues.description', 'LIKE', '%' . $query . '%');
            });
        }

        if(!empty($sort)) {
            switch ($sort) {
                case 'asc':
                    $issues->orderBy('issues.created_at');
                    break;
                case 'desc':
                    $issues->orderBy('issues.created_at', 'desc');
                    break;
                default:
                    return redirect('issues');
            }
        } else {
            $issues->orderBy('created_at');
        }

        return view('issues.index', [
            'issues' => $issues->paginate(5)
        ]);
    }

    public function storeComment($issue_id, Request $request)
    {
        $this->validate($request, [
            'body' => 'required|max:255'
        ]);

        $data = $request->all();

        $data['issue_id'] = $issue_id;

        Auth::user()->comments()->create($data);

        flash('Успешно добавен коментар!', 'Вашият коментар бе успешно публикуван', 'success');

        return redirect()->back();
    }
}
