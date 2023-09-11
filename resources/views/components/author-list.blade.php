<div class="form-group">
    <label for="author">Author</label>
    <select class="form-select" id="multiple-select-field"
            data-placeholder="Choose authors"
            name="authors[]"
            required
            multiple>
        @foreach($authors as $author)
            <option value="{{ $author->getId() }}">{{ $author->getFullName() }}</option>
        @endforeach
    </select>
</div>

<script>
    $( '#multiple-select-field' ).select2( {
        theme: "bootstrap-5",
        width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
        placeholder: $( this ).data( 'placeholder' ),
        closeOnSelect: false,
    } );
</script>
