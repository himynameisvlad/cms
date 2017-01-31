<div class="row">
    <div class="column width-6 offset-3">
        <br>
        <form action="{{ route('signin') }}" method="post">
            <div class="form-group">
                <label for="login">Логин:</label>
                <input class="form-element" type="text" name="login" id="login">
            </div>
            <div class="form-group">
                <label for="password">Пароль:</label>
                <input class="form-element" type="password" name="password" id="password">
            </div>
            <button class="border-navy bkg-hover-navy color-hover-white">Войти</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    </div>
</div>