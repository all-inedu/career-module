@extends('modules.data-scientist-part.app')

@section('content')

    <div class="accordion accordion-flush" id="p5">
        <div class="accordion-item">
            <h2 class="section-header" id="5-header">
                <div>Reflection</div>
            </h2>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="p5-1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#c-p5-1"
                    aria-expanded="false" aria-controls="c-p5-1">
                    Ask yourself
                </button>
            </h2>

            <div id="c-p5-1" class="accordion-collapse collapse show" aria-labelledby="p5-1" data-bs-parent="#p5">
                <div class="accordion-body">
                    <ul>
                        <li>After completing this module, do you think that you are interested in becoming a Data Scientist?
                        </li>
                        <li>If yes, do you have in mind what type of Data Scientist you want to be? Are you more of a
                            generalist or a specialist?</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
