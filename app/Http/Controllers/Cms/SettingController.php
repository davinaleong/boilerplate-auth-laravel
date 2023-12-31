<?php

namespace App\Http\Controllers\Cms;

use App\Helpers\StatusHelper;
use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function index()
    {
        return view('cms.setting.index', [
            'settings' => Setting::paginate(Setting::getListPerPage()),
        ]);
    }

    public function edit()
    {
        return view('cms.setting.edit', [
            'settings' => Setting::all(),
            'settings_count' => Setting::count()
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'names' => 'required|array',
            'names.*' => 'nullable|string',
            'keys' => 'required|array',
            'keys.*' => 'nullable|string',
            'values' => 'required|array',
            'values.*' => 'nullable|string',
        ]);

        Setting::where('user_id', Auth::id())->delete();

        $nameCount = count($request->input('names'));
        $keyCount = count($request->input('keys'));
        $valueCount = count($request->input('values'));
        $minCount = min([$nameCount, $keyCount, $valueCount]);

        for ($i = 0; $i < $minCount; $i++) {
            $value = $request->input("values.{$i}");

            if ($value === "true") {
                $value = true;
            }

            if ($value === "false") {
                $value = false;
            }

            Setting::create([
                'user_id' => Auth::id(),
                'name' => $request->input("names.{$i}"),
                'key' => $request->input("keys.{$i}"),
                'value' => $value,
            ]);
        }

        Activity::create([
            'user_id' => Auth::id(),
            'message' => 'Settings modified.',
            'label' => 'View Settings',
            'link' => route('cms.setting.index')
        ]);

        return redirect(route('cms.setting.index'))->with('status', StatusHelper::instance()::$SETTINGS_UPDATED);
    }
}
