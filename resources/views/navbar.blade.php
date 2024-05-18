<div class="navcontainer">
    <nav class="nav">
        <div class="nav-upper-options">
            <div class="nav-option option2">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                    class="nav-img" alt="dashboard">
                <h3> Dashboard</h3>
            </div>


            <div class="nav-option option4">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png" class="nav-img"
                    alt="institution">
                <h3> Bookings</h3>
            </div>

            <div class="nav-option option5">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png" class="nav-img"
                    alt="blog">
                <h3> Packages</h3>
            </div>
            <!--
            <div class="nav-option option6">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png" class="nav-img"
                    alt="settings">
                <h3> Settings</h3>
            </div>
-->


            <div class="nav-option logout">
                <a href="{{ route('signout') }}" class="nav-link">
                    <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png" class="nav-img"
                        alt="logout">
                    <h3 style="margin-left:20px;">Logout</h3>
                </a>
            </div>


        </div>
    </nav>
</div>

<script>
$(document).ready(function() {
    $('.option2').click(function() {
        window.location.href = "{{ url('/dashboard') }}";
    });

    $('.option4').click(function() {
        window.location.href = "{{ url('/booking') }}";
    });

    $('.option5').click(function() {
        window.location.href = "{{ url('/package') }}";
    });

    if ("{{ url()->current() }}" === "{{ url('/dashboard') }}") {
        $('.option2').addClass('active');
    }
    if ("{{ url()->current() }}" === "{{ url('/booking') }}") {
        $('.option4').addClass('active');
    }
    if ("{{ url()->current() }}" === "{{ url('/package') }}") {
        $('.option5').addClass('active');
    }
});
</script>