<x-verb-to-be-challenge>


<x-title>Choose The Correct Option</x-title>

<p class="ml-20 paragraph">Fill in the  blank by selecting the correct answer</p>

<form action="" class=" my-10 space-y-10">
    @csrf
  
    <x-question-challenge 
    number_question="1"
    start="1.She"
    finish="my sister"
    a="am"
    b="is"
    c="are"
    color="#5F3A84"
    />

    <x-question-challenge 
    number_question="2"
    start="2. We"
    finish="ready for the trip"
    a="am"
    b="is"
    c="are"
    color="#5F3A84"
    />

    <x-question-challenge 
    number_question="3"
    start="3. I"
    finish="ready for the trip"
    a="am"
    b="is"
    c="are"
    color="#5F3A84"
    />

    <x-question-challenge 
    number_question="4"
    start="4."
    finish="they at the library today?"
    a="we"
    b="are"
    c="is"
    color="#a18f2d"
    />

    <x-question-challenge 
    number_question="5"
    start="5. I"
    finish="you interested in learning Spanish?"
    a="we"
    b="are"
    c="is"
    color="#a18f2d"
    />

    <x-question-challenge 
    number_question="6"
    start="6. Where"
    finish="he going after school?"
    a="we"
    b="are"
    c="is"
    color="#a18f2d"
    />

    
    <x-question-challenge 
    number_question="7"
    start="7. She"
    finish="happy about the results."
    a="isn't"
    b="aren't"
    c="am not"
    color="#4A90E2"
    />

    <x-question-challenge 
    number_question="8"
    start="8. We"
    finish="going to the party tonight."
    a="isn't"
    b="aren't"
    c="am not"
    color="#4A90E2"
    />


    <x-question-challenge 
    number_question="9"
    start="9. I"
    finish="sure about this decision."
    a="isn't"
    b="aren't"
    c="am not"
    color="#4A90E2"
    />

    
    <button type="submit" class="btn-verify">Verify</button>

</form>
</x-verb-to-be-challenge>