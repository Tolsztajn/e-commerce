<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../public/css/styles.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet" type="text/css">


    </head>
    <body>

      <div class="contenedor">

      <div class="rawr">
      <marquee>RAWR RAWRRRR</marquee>
      <marquee>RAWR RAWRRRR</marquee>
      </div>
      <div class="dino">
      <pre>
              .-=-==--==--.
        ..-=="  ,'o`)      `.
      ,'         `"'         \
      :  (                     `.__...._
      |                  )    /         `-=-.
      :       ,vv.-._   /    /               `---==-._
      \/\/\/VV ^ d88`;'    /                         `.
         ``  ^/d88P!'    /             ,              `._
             ^/    !'   ,.      ,      /                  "-,,__,,--'""""-.
            ^/    !'  ,'  \ . .(      (         _           )  ) ) ) ))_,-.\
           ^(__ ,!',"'   ;:+.:%:a.     \:.. . ,'          )  )  ) ) ,"'    '
           ',,,'','     /o:::":%:%a.    \:.:.:         .    )  ) _,'
            """'       ;':::'' `+%%%a._  \%:%|         ;.). _,-""
                   ,-='_.-'      ``:%::)  )%:|        /:._,"
                  (/(/"           ," ,'_,'%%%:       (_,'
                                 (  (//(`.___;        \
                                  \     \    `         `
                                   `.    `.   `.        :
                                     \. . .\    : . . . :
                                      \. . .:    `.. . .:
                                       `..:.:\     \:...\
                                        ;:.:.;      ::...:
                                        ):%::       :::::;
                                    __,::%:(        :::::
                                 ,;:%%%%%%%:        ;:%::
                                   ;,--""-.`\  ,=--':%:%:\
                                  /"       "| /-".:%%%%%%%\
                                                  ;,-"'`)%%)
                                                 /"      "|
      </pre>
      </div>
      




      <ul>
              @foreach ($products as $product)
      			<li>{{$product->name}}</li>
      		@endforeach
          </ul>

    </body>
</html>
