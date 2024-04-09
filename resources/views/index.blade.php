<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="/favicon.ico" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no"
    />
    <title>Ярмарка проектов ИРНИТУ</title>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] =
                m[i] ||
                function() {
                    (m[i].a = m[i].a || []).push(arguments);
                };
            m[i].l = 1 * new Date();
            (k = e.createElement(t)),
            (a = e.getElementsByTagName(t)[0]),
            (k.async = 1),
            (k.src = r),
            a.parentNode.insertBefore(k, a);
        })(
            window,
            document,
            'script',
            'https://mc.yandex.ru/metrika/tag.js',
            'ym',
        );

        ym(89310624, 'init', {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true,
        });
    </script>
    <noscript>
        <div>
            <img src="https://mc.yandex.ru/watch/89310624" style="position: absolute; left: -9999px" alt="" />
        </div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

    <script type="module" crossorigin src="{{ asset('assets/index.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/index.css') }}">

</head>

<body class="antialiased">
    <div id="app"></div>
</body>

</html>