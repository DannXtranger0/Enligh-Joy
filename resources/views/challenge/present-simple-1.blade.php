<x-present-simple-challenge>


<x-title>Choose The Correct Option</x-title>

<p class="ml-20 paragraph">Look carefully at the images and choose the correct answer for each question.</p>

<form action="" class=" my-10 space-y-10">
    @csrf
  
    <x-question-challenge-image 
    number_question="1"
    start="1.He"
    finish="to much water"
    a="Drink"
    b="Drinkes"
    c="Drinks"
    img="images\challenges\present-simple\1.png"
    color="#5F3A84"
    />


    <x-question-challenge-image 
    number_question="2"
    start="2.She"
    finish="every morning"
    a="runs"
    b="running"
    c="run"
    img="images\challenges\present-simple\2.png"
    color="#5F3A84"
    />


    <x-question-challenge-image 
    number_question="3"
    start="3.Do they"
    finish="?"
    a="dances"
    b="dancing"
    c="dance"
    img="images\challenges\present-simple\3.png"
    color="#5F3A84"
    />


    <x-question-challenge-image 
    number_question="4"
    start="4.He"
    finish="look at his cellphone"
    a="doensn't"
    b="do not"
    c="does"
    img="images\challenges\present-simple\4.png"
    color="#5F3A84"
    />

    <x-question-challenge-image 
    number_question="5"
    start="5."
    finish="they watch television?"
    a="doensn't"
    b="do not"
    c="does"
    img="images\challenges\present-simple\5.png"
    color="#5F3A84"
    />


    <x-question-challenge-image 
    number_question="6"
    start="6.The dog"
    finish="five bones?"
    a="doesn't has"
    b="does have"
    c="doesn't have"
    img="images\challenges\present-simple\6.png"
    color="#5F3A84"
    />

    <x-question-challenge-image 
    number_question="7"
    start="7.She doesn't"
    finish="a car"
    a="haves"
    b="has"
    c="have"
    img="images\challenges\present-simple\7.png"
    color="#5F3A84"
    />
    
    <x-question-challenge-image 
    number_question="8"
    start="8.Does he"
    finish="a photo with his dog?"
    a="takes"
    b="take"
    c="make"
    img="images\challenges\present-simple\8.png"
    color="#5F3A84"
    />

    <button type="submit" class="btn-verify">Verify</button>

</form>
</x-present-simple-challenge>