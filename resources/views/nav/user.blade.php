<a href="https://github.com/ARCOMM/ARCMF/releases/download/2.0.1/ARCMF.zip" class="nav-item nav-link hidden-sm-down">
    ARCMF
    <i class="material-icons" style="margin-top: 15px;float: right;font-size: 18px;margin-left: 5px;">file_download</i>
</a>

<li class="nav-item dropdown hidden-sm-down">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" role="button" aria-haspopup="true" aria-expanded="false">
        {{ auth()->user()->username }}
    </a>

    <div class="dropdown-menu">
        <a
            href="{{ url('/hub/settings') }}"
            class="dropdown-item">
            Settings
        </a>
    </div>
</li>
