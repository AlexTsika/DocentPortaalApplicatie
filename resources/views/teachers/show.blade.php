<h1>{{ $teacher->firstname }} {{ $teacher->lastname }}</h1>
<h2>{{ $teacher->category_id }} {{ $teacher->location_id }}</h2>
<button>Contact Me</button>
@component('components.map')
@endcomponent