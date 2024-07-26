@extends('backend.layout.app')
@section('title',$title)
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <form action="{{ route('admin.question.store',$id) }}" method="post" class="card">
                    @csrf
                    <div class="card-header">
                        <h4 class="d-inline-block">{{ $title }}</h4>
                        <a href="{{ route('admin.quiz.show',[$id,'question']) }}" class="btn btn-danger waves-effect float-end">
                            <i class="fa fa-arrow-left"></i> Go Back
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="row" >
                            <div id="addRowHere" class="">
                                <div class="card border border-secondary mb-2">
                                    <div class="card-header">Question 1</div>
                                    <div class="card-body">
                                        <div class="mb-2">
                                            <input type="text" class="form-control mb-1" name="questions[question][title]" placeholder="Input Here Text Question">
                                        </div>
                                        <div class="mb-2">
                                            <div class="row">
                                                <div class="col-md-6 mb-1">
                                                    <input type="text" name="questions[question][option][option_one]" class="form-control mb-2" value="" placeholder="Option One">
                                                </div>
                                                <div class="col-md-6 mb-1">
                                                    <input type="text" name="questions[question][option][option_two]" class="form-control mb-2" value="" placeholder="Option Two">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="questions[question][option][option_three]" class="form-control mb-2" value="" placeholder="Option Three">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="questions[question][option][option_fore]" class="form-control mb-2" value="" placeholder="Option Fore">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <select class="form-select" name="questions[question][answer]" id="inlineFormSelectPref">
                                                <option selected="">Select Right Anser</option>
                                                <option value="option_one">Option One</option>
                                                <option value="option_two">Option Two</option>
                                                <option value="option_three">Option Three</option>
                                                <option value="option_fore">Option Fore</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a id="addFiled" class="btn btn-sm btn-primary shadow float-end">+ Add Question</a>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit Question</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>

        var index = 0;
        $('#addFiled').click(() => {
            index = index + 1;
            const serialNumber = index + 1;
            var row =
            `
                <div class="card border border-secondary mb-2">
                    <div class="card-header">Question - ${serialNumber}</div>
                    <div class="card-body">
                        <div class="mb-2">
                            <input type="text" class="form-control mb-1" name="questions[question_${index}][title]" placeholder="Input Here Text Question">
                        </div>
                        <div class="mb-2">
                            <div class="row">
                                <div class="col-md-6 mb-1">
                                    <input type="text" name="questions[question_${index}][option][option_one]" class="form-control mb-2" value="" placeholder="Option One">
                                </div>
                                <div class="col-md-6 mb-1">
                                    <input type="text" name="questions[question_${index}][option][option_two]" class="form-control mb-2" value="" placeholder="Option Two">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="questions[question_${index}][option][option_three]" class="form-control mb-2" value="" placeholder="Option Three">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="questions[question_${index}][option][option_fore]" class="form-control mb-2" value="" placeholder="Option Fore">
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <select class="form-select" name="questions[question_${index}][answer]" id="inlineFormSelectPref">
                                <option selected="">Select Right Anser</option>
                                <option value="option_one">Option One</option>
                                <option value="option_two">Option Two</option>
                                <option value="option_three">Option Three</option>
                                <option value="option_fore">Option Fore</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer" id="removeElement">
                        <a onclick="removeQuestion()" id="removeItem" class="btn btn-danger btn-sm">Remove</a>
                    </div>
                </div>
            `;

            $("#addRowHere").append(row);
         });

        const removeQuestion = ()=>{
            const removeItem = document.getElementById('removeItem');
            removeItem.closest('.card').remove();
        }
    </script>
@endsection

{{-- <div class="col-md-6 mb-2">
     <div class="input-group">
         <label for="option2" class="input-group-text">
             <input id="option2"
                    name="questions[question][answer]"
                    class="form-check-input mt-0"
                    type="radio"
                    value="option2"
                    aria-label="Radio button for following text input">
         </label>
         <input type="text"
                class="form-control"
                name="questions[question][option][option2]"
                value="B"
                aria-label="Text input with radio button">
     </div>
 </div>
 <div class="col-md-6">
     <div class="input-group">
         <label for="option3" class="input-group-text">
             <input id="option3"
                    name="questions[question][answer]"
                    class="form-check-input mt-0"
                    type="radio"
                    value="option3"
                    aria-label="Radio button for following text input">
         </label>
         <input type="text"
                class="form-control"
                name="questions[question][option][option3]"
                value="C"
                aria-label="Text input with radio button">
     </div>
 </div>
 <div class="col-md-6">
     <div class="input-group">
         <label for="option4" class="input-group-text">
             <input id="option4"
                    name="questions[question][answer]"
                    class="form-check-input mt-0"
                    type="radio"
                    value="option4"
                    aria-label="Radio button for following text input">
         </label>
         <input type="text"
                class="form-control"
                name="questions[question][option][option4]"
                value="D"
                aria-label="Text input with radio button">
     </div>
 </div>--}}
{{--
<div class="col-md-12" id="inputRow">
    <div class="card shadow border border-secondary">
        <div class="card-header bg-secondary text-white">Question - ${serialNumber}</div>
        <div class="card-body">
            <div class="mb-2">
                <input type="text" class="form-control mb-1" name="questions[question${switchLabelName}][q]" placeholder="Input Here Text Question">
                <input type="file" class="form-control mb-1" name="questions[question${switchLabelName}][q_image]" placeholder="Input Here Image Question">
            </div>
            <div class="mb-2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-1">
                            <label for="option1" class="input-group-text">
                                <input id="option1"
                                       name="questions[question${switchLabelName}][answer]"
                                       class="form-check-input mt-0"
                                       type="radio"
                                       value="option1"
                                       aria-label="Radio button for following text input">
                            </label>
                            <input type="text" class="form-control"
                                   name="questions[question${switchLabelName}][option][option1]" value="A"
                                   aria-label="Option One">
                        </div>
                        <div class="input-group">
                            <label for="option2" class="input-group-text">
                                <input id="option2"
                                       name="questions[question${switchLabelName}][answer]"
                                       class="form-check-input mt-0"
                                       type="radio"
                                       value="option3"
                                       aria-label="Radio button for following text input">
                            </label>
                            <input type="text"
                                   class="form-control"
                                   name="questions[question${switchLabelName}][option][option3]"
                                   value="C"
                                   aria-label="Text input with radio button">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-1">
                            <label for="option3" class="input-group-text">
                                <input id="option3"
                                       name="questions[question${switchLabelName}][answer]"
                                       class="form-check-input mt-0"
                                       type="radio"
                                       value="option2"
                                       aria-label="Radio button for following text input">
                            </label>
                            <input type="text"
                                   class="form-control"
                                   name="questions[question${switchLabelName}][option][option2]"
                                   value="B"
                                   aria-label="Text input with radio button">
                        </div>
                        <div class="input-group">
                            <label for="option4" class="input-group-text">
                                <input id="option4"
                                       name="questions[question${switchLabelName}][answer]"
                                       class="form-check-input mt-0"
                                       type="radio"
                                       value="option4"
                                       aria-label="Radio button for following text input">
                            </label>
                            <input type="text" class="form-control"
                                   name="questions[question${switchLabelName}][option][option4]"
                                   value="D"
                                   aria-label="Text input with radio button">
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <input type="text" name="questions[question${switchLabelName}][explanation]"class="form-control mb-1" placeholder="Input Here Text Explanation">
                <input type="file" name="questions[question${switchLabelName}][image_explanation]"class="form-control mb-1" placeholder="Input Here Image Explanation">
            </div>
        </div>
        <div class="card-footer">
            <a class="btn btn-sm btn-danger shadow" id="removeRow">X</a>
        </div>
    </div>
</div>--}}
