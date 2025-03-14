
    <div class="card p-4 shadow-lg rounded-4 w-100 d-flex flex-column justify-content-between"
         style="background-color: #110C3D; min-height: 700px; max-height: 800px;">
        <!-- Navigation Links -->
        <nav class="nav flex-column">
            <a href="{{ route('admin.dashboard') }}" 
            class="nav-link text-white fw-bold p-3 {{ request()->routeIs('admin.dashboard') ? 'active-link' : '' }}">
                <img src="{{ asset('images/icn dashboard.png') }}" alt="Dashboard" width="30" height="30" class="me-2">    
                Dashboard
            </a>

            <a href="{{ route('admin.createExam') }}" 
            class="nav-link text-white fw-bold p-3 {{ request()->routeIs('admin.createExam') ? 'active-link' : '' }}">
                <img src="{{ asset('images/icn createExam.png') }}" alt="Create Exam" width="30" height="30" class="me-2"> 
                Create Exam
            </a>

            <a href="{{ route('admin.agents') }}" 
            class="nav-link text-white fw-bold p-3 {{ request()->routeIs('admin.agents') ? 'active-link' : '' }}">
                <img src="{{ asset('images/icn agent.png') }}" alt="Agents" width="30" height="30" class="me-2">  
                Agents
            </a>

            <a href="{{ route('admin.examArchive') }}" 
            class="nav-link text-white fw-bold p-3 {{ request()->routeIs('admin.examArchive') ? 'active-link' : '' }}">
                <img src="{{ asset('images/icn examArchive.png') }}" alt="Exam Archive" width="30" height="30" class="me-2">  
                Exam Archive
            </a>
        </nav>


        <div class="mt-auto">
            <hr class="bg-white">
            <a href="{{ route('admin.dashboard') }}" class="nav-link text-white fw-bold p-3">
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
