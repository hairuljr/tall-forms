@error($bind)
    <p class="error">{{ $this->errorMessage($message) }}</p>
@elseif($array_field->help)
    <p class="help">{{ $array_field->help }}</p>
@enderror
