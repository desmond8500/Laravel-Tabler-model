<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/cv/cv1.css">
    <title>CV</title>
</head>

<body>
<table class="table">
    <tr>
        <th class="page1">
            <div id="etat_civil">
                <div class="photo">
                    <img src="{{ $cv->photo }}" alt="Avatar">
                </div>
                <div class="name">{{ $cv->prenom }} {{ $cv->nom }}</div>
                <div class="poste">{{ $cv->fonction }}</div>

            </div>
            <div id="contact">
                <div class="section_title">CONTACT</div>
                <div class="subsection">{{ $cv->tel }}</div>
                <div class="subsection">{{ $cv->address }}</div>
                <div class="subsection">{{ $cv->email }}</div>
            </div>
            <div id="Formation">
                <div class="section_title">FORMATION</div>
                    @foreach ($formations as $formation)
                        <div class="formation">
                            <div class="diplome">{{ $formation->diplome }}</div>
                            <div class="ecole">{{ $formation->ecole }}</div>
                            <div class="date">{{ $formation->date }}</div>
                        </div>
                    @endforeach
            </div>
            <div id="Langues">
                <div class="section_title">LANGUES</div>
                <ul class="list">
                    @foreach ($langues as $langue)
                        <li > {{ $langue->name }} </li>
                    @endforeach
                </ul>
            </div>
        </th>
        <th class="page2">
            <div id="profil">
                <div class="section_title">PROFIL</div>
                <div>
                    {!! $cv->profil !!}
                </div>
            </div>
            <div id="experience">
                <div class="section_title">EXPERIENCE PROFESSIONELLE</div>
                @foreach ($experiences as $experience)
                    <div class="exp">
                        <div class="exp-info">
                            {{ $experience->societe }} |
                            {{ $experience->poste }}
                        </div>
                        <div class="exp-date">
                            {{ $experience->date }}
                        </div>
                        <ul class="text-secondary">
                            @foreach (App\Models\CvExp::where('exp_id', $experience->id)->get() as $tache)
                                <li>{{ $tache->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
            <div id="Competences">
                <div class="section_title">COMPETENCES</div>
                @foreach ($competences as $competence)
                    <div class="comp-titre">{{ $competence->name }}</div>
                    <ul>
                        @foreach (App\Models\CvTache::where('competence_id', $competence->id)->get() as $tache)
                            <li>{{ $tache->name }}</li>
                        @endforeach
                    </ul>
                @endforeach
            </div>
        </th>
    </tr>
</table>
</body>
</html>
