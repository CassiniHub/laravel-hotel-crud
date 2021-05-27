<form method="POST" action="{{ route('updateEmployee', $employee -> id) }}">
    @csrf
    @method('POST')

    <div>
        <label for="firstname">Firstname</label>
        <div>
            <input id="firstname" type="text" class="form-control" name="firstname" value="{{ $employee -> firstname }}">
        </div>
    </div>
    <div>
        <label for="lastname">Lastname</label>
        <div>
            <input id="lastname" type="text" class="form-control" name="lastname" value="{{ $employee -> lastname }}">
        </div>
    </div>
    <div>
        <label for="role">Role</label>
        <div>
            <input id="role" type="text" class="form-control" name="role" value="{{ $employee -> role }}">
        </div>
    </div>
    <div>
        <label for="ral">Ral</label>
        <div>
            <input id="ral" type="text" class="form-control" name="ral" value="{{ $employee -> ral }}">
        </div>
    </div>
    <div>
        <div>
            <button type="submit">
                UPDATE
            </button>
        </div>
    </div>
</form>