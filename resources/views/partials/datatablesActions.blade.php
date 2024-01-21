<div class="btn-group">
    @isset($viewGate)
        @can($viewGate)
            <a class="btn btn-lg btn-primary" href="{{ route('admin.' . $crudRoutePart . '.show', $row->id) }}">
                <i class="fa fa-eye"></i> &nbsp; {{ trans('global.view') }}
            </a>
        @endcan
    @endisset


    @isset($editGate)
        @can($editGate)
            <a class="btn btn-lg btn-warning " style="color: black"
                href="{{ route('admin.' . $crudRoutePart . '.edit', $row->id) }}">
                <i class="fa fa-edit"></i> &nbsp; {{ trans('global.edit') }}
            </a>
        @endcan
    @endisset

    @isset($deleteGate)
        @can($deleteGate)
            <form action="{{ route('admin.' . $crudRoutePart . '.destroy', $row->id) }}" method="POST"
                onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-lg btn-danger">
                    <i class="fa fa-trash"></i> &nbsp; {{ trans('global.delete') }}
                </button>
            </form>
        @endcan
    @endisset

    @if (request()->route()->getName() == 'admin.user-management.employees.index')
        <form action="{{ route('admin.user-management.employees.active-or-inactive', $row->id) }}" method="POST"
            onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-lg btn-dark">
                <i class="fa fa-refresh"></i> &nbsp; تبديل الحالة
            </button>
        </form>

        <form action="{{ route('admin.user-management.employees.reset-password', $row->id) }}" method="POST"
            onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-lg btn-info">
                <i class="fa fa-fingerprint"></i> &nbsp; استعادة كلمة المرور
            </button>
        </form>
    @endif
</div>