<x-present-simple-challenge>
    <x-title>Choose The Correct Option</x-title>

    <p class="ml-20 paragraph">Look carefully at the images and choose the correct answer for each question.</p>

    <form action="" class="my-10 space-y-10">
        @csrf

        <x-question-challenge-image 
            number_question="1"
            start="1.He"
            finish="to much water"
            a="Drink"
            b="Drinkes"
            c="Drinks"
            img="images/challenges/present-simple/1.png"
            color="#5F3A84"
        />

        <x-question-challenge-image 
            number_question="2"
            start="2.She"
            finish="every morning"
            a="runs"
            b="running"
            c="run"
            img="images/challenges/present-simple/2.png"
            color="#5F3A84"
        />

        <x-question-challenge-image 
            number_question="3"
            start="3.Do they"
            finish="? "
            a="dances"
            b="dancing"
            c="dance"
            img="images/challenges/present-simple/3.png"
            color="#5F3A84"
        />

        <x-question-challenge-image 
            number_question="4"
            start="4.He"
            finish="look at his cellphone"
            a="doesn't"
            b="do not"
            c="does"
            img="images/challenges/present-simple/4.png"
            color="#5F3A84"
        />

        <x-question-challenge-image 
            number_question="5"
            start="5."
            finish="they watch television?"
            a="Doesn't"
            b="Do"
            c="Does"
            img="images/challenges/present-simple/5.png"
            color="#5F3A84"
        />

        <x-question-challenge-image 
            number_question="6"
            start="6.The dog"
            finish="five bones?"
            a="doesn't has"
            b="does have"
            c="doesn't have"
            img="images/challenges/present-simple/6.png"
            color="#5F3A84"
        />

        <x-question-challenge-image 
            number_question="7"
            start="7.She doesn't"
            finish="a car"
            a="haves"
            b="has"
            c="have"
            img="images/challenges/present-simple/7.png"
            color="#5F3A84"
        />
        
        <x-question-challenge-image 
            number_question="8"
            start="8.Does he"
            finish="a photo with his dog?"
            a="takes"
            b="take"
            c="make"
            img="images/challenges/present-simple/8.png"
            color="#5F3A84"
        />

        <x-question-challenge-image 
            number_question="9"
            start="9.She"
            finish="as a chef"
            a="work"
            b="works"
            c="working"
            img="images/challenges/present-simple/9.png"
            color="#5F3A84"
        />

        <x-question-challenge-image 
            number_question="10"
            start="10.What"
            finish="she do?"
            a="does"
            b="watching"
            c="don't"
            img="images/challenges/present-simple/10.png"
            color="#5F3A84"
        />

        <div class="flex items-center space-x-4 mt-4">
            <button type="button" class="btn-verify">Verify</button>
            <div class="results border-2 border-red-600 px-6 left-64 w-1/4 relative p-4 rounded hidden">
                <p id="result-text" class="paragraph"></p>
            </div>
        </div>

         {{-- <!-- Contenedor para la imagen de respuesta correcta/incorrecta -->
     <div class="result-icon" style="position: absolute; top: 10px; right: 10px;">
        <img id="icon-{{ $number_question }}" style="display: none; width: 20px;" alt="">
    </div> --}}
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const correctAnswers = {
                1: 'Drink',
                2: 'runs',
                3: 'dance',
                4: 'does',
                5: 'Do',
                6: "doesn't have",
                7: 'has',
                8: 'take',
                9: 'works',
                10: 'does',
            };

            const totalQuestions = Object.keys(correctAnswers).length;

            document.querySelector('.btn-verify').addEventListener('click', function (event) {
                event.preventDefault(); // Evita que el formulario se envíe

                // Inicializo contadores en 0
                let correctCount = 0;
                let incorrectCount = 0;

                // Verifica las respuestas
                for (let questionNumber in correctAnswers) {
                    const selectedAnswer = document.querySelector(`input[name='question-${questionNumber}']:checked`);
                    const questionDiv = document.getElementById(`question-${questionNumber}`);
                    const icon = document.getElementById(`icon-${questionNumber}`); // Selecciona la imagen correspondiente

                    // // Si no existe la imagen, la creamos
                    // if (!icon) {
                    //     icon = document.createElement('img');
                    //     icon.style.width = '20px'; // Ajusta el tamaño de la imagen
                    //     icon.style.position = 'relative'; // Posicionamiento relative
                    //     icon.style.right = '-70vw'; // Espaciado desde la derecha
                    //     icon.style.top = '-11vw'; // Espaciado desde la parte superior
                    //     questionDiv.appendChild(icon); // Agregar la imagen al div
                    // }

                    if (selectedAnswer) {
                        const answerValue = selectedAnswer.value;

                        if (answerValue === correctAnswers[questionNumber]) {
                            questionDiv.style.border = '3px solid #1CED49'; // Respuesta correcta
                            icon.src = '{{ asset('images/correct.png') }}'; // Ruta a la imagen de check
                            icon.style.display = 'inline'; // Mostrar la imagen
                            correctCount++;
                        } else {
                            questionDiv.style.border = '3px solid #912F2F'; // Respuesta incorrecta
                            icon.src = '{{ asset('images/incorrect.png') }}'; // Ruta a la imagen de X
                            icon.style.display = 'inline'; // Mostrar la imagen
                            incorrectCount++;
                        }

                    // } else {
                    //     incorrectCount++; // Contar como incorrecta si no se selecciona respuesta
                     }
                }
                
                // Mostrar resultados
                const resultText = document.getElementById('result-text');
                resultText.innerHTML = `
                    <span class="text-red-600">¡Errors!: ${incorrectCount}</span><br>
                    <span class="text-green-600">¡Corrects!: ${correctCount} / 9</span>`;
                
                // Hacer visible el contenedor de resultados
                document.querySelector('.results').classList.remove('hidden');

                // // Redirigir si todas las respuestas son correctas
                // if (correctCount === totalQuestions) {
                //     window.location.href = '/present-simple-challenge/2'; 
                // }
            });
        });
    </script>
</x-present-simple-challenge>
