<div class="border rounded shadow-sm p-3">
    <a href="{{ route('cars.show', $car->id) }}" class="d-flex justify-content-between">
        <div>
            <div class="mb-1">
                    <div class="bg-dark rounded text-white text-center">
                        <img class="img-fluid w-100 my-3" src="{{$car->getImage()}}">
                    </div>

                <div class="d-flex align-items-center justify-content-between">

                    <a href="{{ route('cars.index', ['brand' => $car->brand->id]) }}" class="link-dark fw-semibold text-decoration-none">
                        {{ $car->brand->name }}
                    </a>
                    <div>
                    @if($car->created_at >= \Carbon\Carbon::now()->subMonths(3)->toDateTimeString())
                        <span class="badge bg-danger-subtle border border-danger-subtle text-danger-emphasis rounded-pill">
                    @lang('app.new')
                </span>
                    @endif
                    <button class="btn btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCar{{ $car->id }}" aria-expanded="false" aria-controls="collapseCar{{ $car->id }}">
                        <i class="bi-caret-down-fill"></i>
                    </button>
                    </div>
                </div>
            </div>
            <div class="mb-1">
                <a href="{{ route('cars.index', ['color' => $car->color->id]) }}" class="link-dark text-decoration-none">
                    {{ $car->name }} ∙ {{ $car->color->getName() }}
                </a>
                <a href="{{ route('cars.index', ['year' => [$car->year->id]]) }}" class="link-dark text-decoration-none">
                    ∙ {{ $car->year->name }}
                </a>
            </div>
        </div>
    </a>
    <div id="collapseCar{{ $car->id }}" class="small text-secondary collapse">
        <a href="{{ route('cars.index', ['location' => $car->location->id]) }}" class="link-dark text-decoration-none">
            {{ $car->location->getName() }}
        </a>
        ∙ {{ $car->description }} ({{ $car->created_at }})
    </div>
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <span class="text-primary">
                {{ round($car->price, 2) }} <small>TMT</small>
            </span>
            <span class="badge bg-warning-subtle border border-warning-subtle text-warning-emphasis rounded-pill {{ $car->active ? 'd-none':'' }}">
                <i class="bi-clock-fill"></i> @lang('app.pending')
            </span>
            @auth
                <button type="button" class="btn btn-{{ $car->active ? 'danger':'success' }} btn-sm btn-active" value="{{ $car->id }}">
                    {!! $car->active ? '<i class="bi-x-lg"></i>':'<i class="bi-check-lg"></i>' !!}
                </button>
            @endauth
        </div>
        <div>
            <a href="{{ route('cars.show', $car->id) }}" class="link-secondary text-decoration-none">
                <i class="bi-eye-fill"></i> {{ $car->viewed }}
            </a>
        </div>
    </div>
</div>