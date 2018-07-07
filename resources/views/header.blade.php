<!doctype html>
<html lang="{{ app()->getLocale() }}">

<style>
    .page-header {
        background-color: green;
        font-family: 'Sans Serif';
        line-height: 10px;
        font-size: 16px;
        padding-left: 20px;
        padding-top: 5px;
        padding-bottom: 5px;
        color: white;
        }
</style>

    <header class="page-header">
        <div class="container">
            <div class="row">
                <div class="col s3">
                    <a target="_blank" href="https://www.reserveamerica.com/welcome.do">Reserve America</a>
                </div>
                <div class="col s3">
                    <a target="_blank" href="https://www.floridastateparks.org/">Florida State Parks</a>
                </div>
                <div class="col s3">
                    <a target="_blank" href="http://www.pinellascounty.org/park/camping.htm">Pinellas County</a>
                </div>
                <div >
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <a href="{{ url('/home') }}">Home</a>
                    @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
                @endif
            </div>
        </div>
    </header> 


</html>