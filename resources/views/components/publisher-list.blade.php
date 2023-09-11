<div class="form-group">
    <label for="publisher">Publisher</label>
    <select name="publisherId" id="publisher" name="publisher" class="form-control" required>
        @foreach($publishers as $publisher)
            <option value="{{ $publisher->getId() }}">{{ $publisher->getName() }}</option>
        @endforeach
    </select>
</div>
