@auth
<div class="bg-gray-100 py-2 px-4">
    <div class="container mx-autp px-4 flex justify-center gap-8">

        <div class="container-grid">
            <div class="usermenu-left">
                <span class="font-bold uppercase">
                    Welkom {{auth()->user()->name}}
                  </span>
            </div>
            <div class="usermenu-right orange">
                <a href="{{ route('profile.edit') }}">
                    <i class="fa-solid fa-user-pen"></i>
                    <span class="text-[#F79012]">Wijzig profiel</span>
                </a>&nbsp;

                <form method="POST" action="/logout" class="inline login">
                    @csrf
                    <button type='submit'>
                        <i class="fa fa-sign-out orange"></i>
                        <span class="text-[#F79012]">Logout</span>
                    </button>
                </form>
            </div>
        </div>  
    </div>
</div>
@endauth
