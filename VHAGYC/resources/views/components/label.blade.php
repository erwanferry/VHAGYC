@props(['value'])

<label style=" font-family: 'Times New Roman', Times, serif; text-align = 'center'">
    {{ $value ?? $slot }}
    <br>
</label>
