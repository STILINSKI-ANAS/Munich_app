@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="http://institut-munich.com/wp-content/uploads/2019/09/cropped-logo.jpg" class="logo" alt="Institu Munich Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
