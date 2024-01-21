<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OperatingParty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\DataTables;

class OperatingPartiesController extends Controller
{
    public function index(Request $request)
    {
        // abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $data = $request->except(['draw', 'columns', 'order', 'start', 'length', 'search', 'change_language', '_']);
        if ($request->ajax()) {
            $query = OperatingParty::select(sprintf('%s.*', (new OperatingParty())->table));
            $table = DataTables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'user_show';
                $editGate = 'user_edit';
                $deleteGate = 'user_delete';
                $crudRoutePart = 'operating-parties';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.operating_party.index');
    }

    public function create()
    {
        // abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.operating_party.create');
    }

    public function store(Request $request)
    {
        $operating_party = OperatingParty::create($request->all());

        return redirect()->route('admin.operating-parties.index');
    }

    public function edit(OperatingParty $operating_party)
    {
        // abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.operating_party.edit', compact('operating_party'));
    }

    public function update(Request $request, OperatingParty $operating_party)
    {
        $operating_party->update($request->all());

        return redirect()->route('admin.operating-parties.index');
    }

    public function show(OperatingParty $operating_party)
    {
        // abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.operating_party.show', compact('operating_party'));
    }

    public function destroy(OperatingParty $operating_party)
    {
        // abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $operating_party->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        OperatingParty::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
