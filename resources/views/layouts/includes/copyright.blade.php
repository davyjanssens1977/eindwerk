<div class="copyright">
    <div class="container-small text-align mg-t">
                <p class="inline">Copyright &copy; {{ date('Y') }}  Vzw Wiebe Bree | <a class="register" href="/privacybeleid">Privacybeleid</a> |
                @auth
                    <form method="POST" action="/logout" class="inline login">
                        @csrf
                        <button type='submit'>
                            <i class="fa-solid fa-door"></i>Logout
                        </button>
                    </form> | <a class="register" href="/register">Registreren</a></p>
                @else  
                <a class="login" href="/login">Login</a> 

               @endauth
    </div>
</div>
