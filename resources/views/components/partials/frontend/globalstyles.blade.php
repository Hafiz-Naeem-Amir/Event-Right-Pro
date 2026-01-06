<div>
    {{ $slot }}
    <style>
    :root {
        --primary_color: #723ac6;
        --light_primary_color: #723ac61a;
        --profile_primary_color: #723ac652;
        --middle_light_primary_color: #723ac685;
    }

    .bg-primary {
        background-color: var(--primary_color);
    }

    .bg-primary-dark {
        background-color: var(--profile_primary_color);
    }

    .navbar-nav>.active>a {
        color: var(--primary_color);
    }

    .text-primary {
        color: var(--primary_color);
    }

    .border-primary {
        border-color: var(--primary_color);
    }
</style>

<input type="hidden" name="currency" id="currency" value="$">
<input type="hidden" name="default_lat" id="default_lat" value="24.90571769">
<input type="hidden" name="default_long" id="default_long" value="67.07942426">

</div>
