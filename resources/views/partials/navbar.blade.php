
    <div class="card p-4 shadow-lg rounded-4 w-100 d-flex flex-column justify-content-between"
         style="background-color: #110C3D; min-height: 750px; max-height: 750px;">
       
        <nav class="nav flex-column">
            <a href="{{ route('admin.dashboard') }}" 
            class="nav-link text-white fw-bold p-3 {{ request()->routeIs('admin.dashboard') ? 'active-link' : '' }}">
                <img src="{{ asset('images/icn dashboard.png') }}" alt="Dashboard" width="30" height="30" class="me-2">    
                Dashboard
            </a>

            <a href="{{ route('admin.createTraining') }}" 
            class="nav-link text-white fw-bold p-3 {{ request()->routeIs('admin.createTraining') ? 'active-link' : '' }}">
                <img src="{{ asset('images/icn createExam.png') }}" alt="Dashboard" width="30" height="30" class="me-2">    
                Create Training
            </a>

            <a href="{{ route('admin.agents') }}" 
            class="nav-link text-white fw-bold p-3 {{ request()->routeIs('admin.agents') ? 'active-link' : '' }}">
                <img src="{{ asset('images/icn agent.png') }}" alt="Agents" width="30" height="30" class="me-2">  
                Monitor Training
            </a>

            <a href="{{ route('admin.examArchive') }}" 
            class="nav-link text-white fw-bold p-3 {{ request()->routeIs('admin.examArchive') ? 'active-link' : '' }}">
                <img src="{{ asset('images/icn examArchive.png') }}" alt="Exam Archive" width="30" height="30" class="me-2">  
                Training Archive
            </a>

            <a href="{{ route('admin.giveExam') }}" 
            class="nav-link text-white fw-bold p-3 {{ request()->routeIs('admin.giveExam') ? 'active-link' : '' }}">
                <img src="{{ asset('images/icn giveExam.png') }}" alt="Give Exam" width="30" height="30" class="me-2">  
                Start Training
            </a>
        </nav>


        <div class="mt-auto">
        <a href="{{ route('admin.register') }}" 
            class="nav-link text-white fw-bold p-3 {{ request()->routeIs('admin.register') ? 'active-link' : '' }}">
                    <img src="{{ asset('images/icn group.png') }}" alt="Settings" width="30" height="30" class="me-2">
                    Register
            </a>
            <a href="{{ route('admin.settings') }}" 
            class="nav-link text-white fw-bold p-3 {{ request()->routeIs('admin.settings') ? 'active-link' : '' }}">
                    <img src="{{ asset('images/icn settings.png') }}" alt="Settings" width="30" height="30" class="me-2">
                    Settings
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="nav-link text-white fw-bold p-3 border-0 bg-transparent">
                    <img src="{{ asset('images/icon logout.png') }}" alt="Logout" width="30" height="30" class="me-2">
                    Logout
                </button>
            </form>
        </div>
    </div>
