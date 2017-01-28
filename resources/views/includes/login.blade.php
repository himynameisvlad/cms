<div class="row">
    <div class="col-xs-6 col-sm-offset-3">
        <h3>Cms login</h3>
        <form action="{{ route('signin') }}" method="post">
            <div class="form-group">
                <label for="login">Логин:</label>
                <input class="form-control" type="text" name="login" id="login">
            </div>
            <div class="form-group">
                <label for="password">Пароль:</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <button class="btn btn-primary">Войти</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </form>
    </div>
</div>