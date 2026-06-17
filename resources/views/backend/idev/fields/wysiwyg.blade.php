@php 
$preffix_method = (isset($method))? $method."_": "";
$fieldId = $preffix_method . ((isset($field['name'])) ? $field['name'] : 'id_'.$key);
$fieldName = (isset($field['name'])) ? $field['name'] : 'name_'.$key;
$fieldValue = (isset($field['value'])) ? $field['value'] : '';
@endphp
<div class="{{ (isset($field['class'])) ? $field['class'] : 'form-group' }}">
    <label>{{ (isset($field['label'])) ? $field['label'] : 'Label '.$key }}
        @if(isset($field['required']) && $field['required'])
        <small class="text-danger">*</small>
        @endif
    </label>
    <textarea 
        id="{{ $fieldId }}" 
        name="{{ $fieldName }}" 
        class="form-control wysiwyg-editor"
        rows="8"
        style="min-height:180px;"
    >{{ $fieldValue }}</textarea>
</div>

<script>
(function initWysiwyg_{{ str_replace(['-','[',']'], '_', $fieldId) }}() {
    function doInit() {
        if (typeof tinymce === 'undefined') {
            setTimeout(doInit, 300);
            return;
        }
        tinymce.remove('#{{ $fieldId }}');
        tinymce.init({
            selector: '#{{ $fieldId }}',
            height: 280,
            menubar: false,
            plugins: 'lists link charmap',
            toolbar: 'undo redo | bold italic underline | bullist numlist | link | removeformat',
            content_style: 'body { font-family: sans-serif; font-size:14px; }',
            setup: function(editor) {
                editor.on('change input', function() {
                    editor.save();
                });
            }
        });
    }
    // Jalankan setelah DOM siap
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', doInit);
    } else {
        doInit();
    }
})();
</script>
