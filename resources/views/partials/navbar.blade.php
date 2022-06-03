<div class="flex flex-col md:flex-row justify-between items-center">
  <div class="w-24 h-24">
    <a href="{{ route('jobs.index') }}"><img src="{{ asset('images/M-GARAGE.png') }}"></a>
  </div>
  <ul class="flex flex-col md:flex-row items-center mb-3 md:mb-0">
    @auth
    <livewire:search />
    <li class="md:mr-5 py-2 md:py-0"><a href="{{ route('jobs.index') }}" >Les missions</a></li>
    <li class="md:mr-5 py-2 md:py-0"><a href="{{ route('conversations.index') }}" >Mes conversations</a></li>
    <li class="md:mr-5 py-2 md:py-0"><a href="{{ route('home') }}" >Mon compte</a></li>
    <li class="md:mr-5 py-2 md:py-0"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="hover:text-green-400 ">Se déconnecter</a></li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
    @else
    <li class="md:mr-5 py-2 md:py-0 text-gray-900 "><a href="#" >Accueil</a></li>
    <li class="md:mr-5 py-2 md:py-0 text-gray-900 "><a href="{{ route('login') }}" >Se connecter</a></li>
    <li class="md:mr-5 py-2 md:py-0 text-gray-900 "><a href="{{ route('register') }}" >S'enregistrer</a></li>
    @endauth
  </ul>
</div>
