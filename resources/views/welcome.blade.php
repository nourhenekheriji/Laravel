<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gestion de cabinet médical</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            html{line-height:1.15;-webkit-text-size-adjust:100%}
            body{margin:0}a{background-color:transparent}
            [hidden]{display:none}
            html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}
            video{max-width:100%;height:auto}
            .bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}
            .bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}
            .border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
        <style>
            body, html {
                height: 100%;
                margin: 0;
              }
              .bgimg {
                background-image: url('image/images1.jpg');
                height: 100%;
                background-position: center;
                background-size: cover;
                position: relative;
                color: rgb(0, 0, 0);
                font-family: "Courier New", Courier, monospace;
                font-size: 25px;
              }
              hr {
                margin: auto;
                width: 40%;
              }
        </style>
    </head>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py  -4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
    
                    @endauth
                </div>
            @endif
            <body class="antialiased">
            <div class="bgimg">
                <div class="topleft">
                  <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw8SEhAREhIVEhIQFRIYEhIWFxYQFxcSFRkbFhURFRYYHiggGBolGxUVIjEiJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGy0iICUtLS8tLS0tKy0tLS0tLS0tLS0tLS0tLS0tLS0rLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIALcBEwMBEQACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABAUCAwYBBwj/xABMEAACAQICBAgICgcGBwAAAAAAAQIDEQQSBSExYQYTQVFScZGSFBUWIjJjstIHMzRygaGxwdHhU1Ric4LC8CNDdKLD0xckJUJEk5T/xAAbAQEAAwEBAQEAAAAAAAAAAAAAAgMEAQUGB//EADMRAQABAwIFAgQEBQUAAAAAAAABAgMREjETFCEyUQRBIlJhoQUzcYFCQ5Gx8CMkNGLB/9oADAMBAAIRAxEAPwDvDe8sAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAZAZAZAAAAZlzgyJgjq8zLnA9zLnAALgLgEAAAAAAAAAAAAAAAAAAAAA2lt1AeRknsafVrA9A9jQlUlGEXaUr25Nibt9RyaopjMpUU6pwwq6LxGeNPMlOUJSSvzO2VvnHGoxnHRObNWcFLReIzuk5Jz4tTtfkvbLfn+ocWnGcEWas4KmisS5ypxks8IRk1e178ifOOLTjJwas4I0J03OnN5pRau9q1xUrLtOxVFUZhCqmaZxLIIvGk3BPWnOF1uzITtKVPWYdC8DQ/Rw7qMfEr8t+inw1vD4boU+6n9xLVc8o4t/R7HDYd7IU+6hNVce7sRb9sNOlMHSVKo1TimlqaikztuuqaoiZRuUUxTPRWYWnGVWkpJNNyunrXotl9c4pnDJajNUZXUsDQSbdOFkrvzVsMsV1z0y2zRREZw0YWjhp/3dO+3LZXS5PpJ1TXHvKFGipXY6lGNWoopRVoalq5C63MzTEyz3oiK8Q0k1QAAAAAAAAAAAAAAAAAAKjSONbU6eTVdLNm5pLktuLKafdGZa6FV05TjBJJuOr6DsxlxZ4LFcYpO2Vxk01e+whMYSicrPRPx9Lrl7Mim72Susd60r/LKP7qf2lMflz+rTP5kfo8j8ul/h17Zz+V+5/N/Z7Q+WVv3UPtOz+XH6kfmT+kKnSfx9f50fYiXWuyGa93yjFioW2Hz6ftITtKVHdDpqtNSVmYYnD0KqdUIzwX7X1fmWcRXwXscEuV3+oTcdi080sv7Gp838Dlrvh25HwSqMD8dS65eyzTX2Sx2e+FrpXERjBxvrktm7lZntUzMw0364imYV2houU09fm3v2Wt2svvTiFFiJmrLHSfx1Tqh9hy12QX+9HLFIAAAAAAAAAAAAAAAAAAKHHelP538xdCEvJPz5dcfsEnun4bzK9WPJUWZdfL9suwhPWMux0lLxM2knFtNPU02tdnyo5ERPSUonGyBVxNXzZOTU7PZKW3kjmvs2cpLTGNiaqt8lLE1fOkpNzypenLbty5r3tff+JzTGMYNVW+XlbE1U8ym87iv++Su9V05XvbbyndMYxgmqd8pmAm2pNttuW1tt7FyvaRmMbGc7pJEFth8+n7SE7SlR3Q6KcpXe3+v4THERhumZy9pSlfXf8Ar+FHJw7TPVi5S3/1/CSxDmZR9It8TVv0fvW5ErcfHCFc/DKooVVCpTm72i3eyvti195oqjNMwy2qopqiZWL0jQea8ZPM1thsskrf1zlPCr9mji25zllT0pQirRjJLdE5Nqud3YvW42V2KrKdSc0nZqNrq2xay6imaaYiWe7VFVWYaySsAAAAAAAAAAAAAAAAeoC0eDwq1utqW9fgUa7nho4dv5lXW0RgJOTeLfnNu14e6Ti5dj+FGbVr5ihoTR61LFNt8l4fgOLd+V2LVqP4k6ponCOcanHvNBNKzjaz59W9keJc2w7wrXlsq6OwslZ132x/ARcuR7HDt+UepoTBv+/l2x/A7xbng4dv5muOjMBG68Jd+W7j+B3iXflOHbj+JjU0bo9/+V9cfwHEu/KcO18yXhtGYSCsq7aevW4/gRm5cn2OHb8oNRJNpO6TdnzrkZbG3VRO7FbYfPp+0js7S7R3Q6KdK7ez6vwMcT0b5jq9pU7O+r6LfgjkzkiOrGVHq+r3TuSYlH0jTtRq7PR3c63Inbn44QriYolTRjJyjGKTcr2u7bFf7jRmIjMsVMapxCUtG1+jHvfkQ4tC7gVj0bX6Me9+Q4tBwK0acJRk4SSTjbY77SyJiYzCmqmaZxLwOAAAAAAAAAAAAAAAAABjVjdNc6a7Tog+LP2vq/Mlrcw2UMDlkpZr2vqtbktziaswYTCDoAAhVsBmk5ZrXfN+ZOKnMMPFn7X1fmd1mFhFWSXMkVuqThHwow2Di80lOrqy0YtZ9exy6Md7+spu36bcf+NfpvR3L89OkeZcU/hNxOZPiKWVSTy3m3qd7ZvyMc+uq8PUj8Jtx11S7/gl8IGFx0lSlHiMRLZTk1KM7a3xc8ut7mk+slbvRV0U3/SVW/i3h2VFa/y/Isq2Zqd1LwinUzpa8ttVjT6eKcZZr8zqw3UZTeEqZuZ2vzaiNURxYwlRMzanLRgPjqPXL2WSudkqrPdDPCaRq1MQkpWhd+byZV9/3s5Xbppt/VbTcqquY9nuk9IVadfVK8FleXktbWnv26xbt01UfV25cqpr+jHST/tqnVD7DtqMUKr3ejk1QAAAAAAAAAAAAAAAAAAAAAAAAAAEDT2kPB8NXrpXdKDcU9jlsinuzNELleimZXent8S5TR5l8b0Joivj61SMZ3qOM6kpzvZyutUmtl3JHhV1/wAVT6yIimIpjZF0lorEYduNalOm1ytea+qa81/QzkYnZLLTUpVKbpzTazKNSlOL36pRa5YyTT5nFktpy50mMS/SvBXHeEYTC4l+lWpQlO1rZ7Wnb+JM9CKs0vCuWtFcxHl7pfA1Ks4ZLJKLvJu2u+zVrNFm5TRE5ZrtuquYw8dGUMJOMlaSUr8u2TYiqJu5hzTNNqYlDwHx1Hrl7LLbnZKiz3w309FTp1XOLTgsz5b86jbrSK5vRVRhbwqqaswYrRc6tRSbSg9u29rt2t1Cm7FFOCq1VXOWrSXx1Tqh9hO12K7/AHo5NSAAAAAAAAAAAAAAAAAACPjsdRoxz1qkacLpZptRV3sSvtep9gmcbuxEzsr/ACr0d+t0e+jmqPKfCr8HlXo79bo99DVHk4Vfh4+Fejf1uj30NUeThV+Hnlbo39cod9HNUHCr8LPA42lWgqlKpGpB3SlBqSutquuUlE5QqpmJxLeHFLw1pZsBi1zUnLuWn/KVX4zblq9FVpv0T9XLcFNFYjDYWdZZY1MRDjIxeaM5xinxdBSzRUG7qV73ea1vNZ4MzTNWJfR3Kqo2dNgq2LdDW4+coZqspNum5R86OW0lPI2ldz6WtZSExRq6IxVXhzOnMNUrYCVStGCnTjOeRtynScZWzKanJPOrebqWu+vKWfDFWILVVc4y6vgTxkMBhI55x/s1JJOySm3Ne0e3Ypjhx0eD627M36sT7rzj6v6WfeLtNPhl11eWNSpOSadSbT2pu52IiPZya6p92OtNSTcXG9mt6sN+kuRMxOYbfCq36WX+X8COijwnxa/J4VW/Sy/y/gNFPg4tflqbbblKTk3a7duTZsJRiIxCEzM9ZA4AAAAAAAAAAAAAAAAAADhfhd+TYf8Af/6cyu5s0em7pfLSlrANdSQGAH134I/kdX/ET9imXWtmP1Hc7YsUKbhhpGFDCV3KMpZ4TgkouSvOLis8krRjr2sqv1xTRLT6S1Ny7ERKi+C3TiqUXhZzbqUbund3vRdtSv0XqtyJo+dvU9dUPqat3ZTxKTs41HLXaMVFp8zu5LUQi3TPWZMVTtEY/VynwnaSjDB8Q2uNxDisq5IRalOXVdJfSStR8Wr2I36LXgjpaGJw1OUYTgoRjB5o2i3FWeSWyUdW1H0VivVRHTD5f1dmbVyYmcrouZQAAAAAAAAAAAAAAAAAAAAAAAAAcL8LvybD/v8A/TmV3Nmj03dL5aUtbx35NbA1NNamB4B9c+CL5HV/xE/Ypl1vZj9R3O3LFCRhcFOrmUbalrctmvkfOQuVxTHVZbtzVPRTUuAtGk8dKDTxMqSdKcYRoRp1GnJSpQj6N5RSu236Wt3MtMUTXmY6PQrruaMRVPTZS4bhivBHWlbjoeY4bM1RrzZW5mtf0NGe5+FVc1w47Z658Qut/itHKTcnujpjzKwxnAaljMJo+WJlOOJrNupWjlU2qkKlVQkmrNRtFW5EmjRdooprmKY6R0hRYvXdETMzmesoVRY3RMqUMZVWKwVSSpwxai4TozfoRrR1+Y7eld9exFtu57KL1mJ+KN3UM0TOIyyRGZwr9P6ReHw1eukm6UHJJ7M2xJ7rsqt3qbluK6dpWxa/1NEptGTcYt6m0m1va1othVMYlmHAAAAAAAAAAAAAAAAAAAAAADhfhdX/AC2HfIq6u+RXpztcrubNHp+6XyvjI867SlrbMDUTcrNPYdGOkJJNXaWrqEiI60eku1HB9x+DjQ1bDYZ06yjGVWq5xtJSWWcIKOtc7TJRdoop+JmvW6qqsw6icbW3pNamtu56y23ci5TqjZnqpmmcOowVFUqaXMry69rMtVWZy326dNOFZT0fOVNYjPOOJnCMm80sieuUaLp3yuCzOOy+tu+Z3IpvkuL0Nmx/g6hl42tGy1XjCq1Jd2MvqZ9Fbuxy/Enx94fN12Z5jh/X7S+p4/Gy8JpUcqUaU45I680lKm4uouTLFTl3dp88+jjp0StN6LpYvD1sNVSdOtFxfLZ8kl+1GSTW+JzZ1zeiaFWnQoU6zvVp06car23qRioyfambqZzEPNud0ue4X4+FbD18OlJObjFt2t5s05PU77IvtPHs3os67c7ZmY+n0/rl9Lb/AAO/dii7FUdafr/mzo8BjI1qcakU1GV7J2vqbXI9x6tq5FyiKoeF6z0tXpb02qpzMJBYygAAAAAAAAAAAAAAAAAAAAPQPJRT1NXXM9YEHStejh6NWvOCcaMJSkoxjdpK9lfVcjPRKnVVOHyvhdwvw+LjSjToTpum5NuWRXukrLK9xVVXE7Nlu1NE9WfBLhlh8JTqQqUJ1HOeZOKg7LKlbzmuYU1RG5ctTVPR9T0bUpVqVGtGCUa0ITinGKajNKST36y7pjLJOqJwuZ1MS6laFSChh1dQkllt50Y02pKfnXi5N6o2ypb35s01XM0y9e7TZizFUTmen+fRng6OadO6t517Wsr63KK1Japxlsv6W056SqqmiqmY/wA92Cac1Q574ddMVKGj406bcZYqqqcmnZ8XGMqkknvcYrqky6N2l2ujtKUqlGnUjmlGVKnNOMZTTjNasrStL6OTWcFHLQX/AFKjinF5Y0avfUssL78lT/Iaov8A+3m39WSqxn1EXPp917jMRkhUqS2U4yk+qKu/sMrW+YfAXp2rXjjaNWTlJVI10+Z4hydVLmWeOa3PNnZgdvpaFqj/AGkn933GqzPwsPqIxVL5tpn0qv7yXtM8G73z+sv0r0Mf6FEf9Y/s6fgt8mpfx+3I9n0f5MPh/wAe/wCdX+39oWppeOAAAAAAAAAAAAAAAAAAABjVTcZJbWnbrsBydPg9pBtJVldtJf2tTa9XMWTXTEZVxRVM4TfIzSn6eH/uq+6V8xR4XcpcYVOBGk5JxlVpyi9Ti6tSSa5mnHWc5ijw7ytzyjf8NsV0cN2v/bHHt+HeXvefuf8ADbFdHDdr/wBsce34OXu+fulQ4EaTilGNWnGMUkoqrUSSWxJKOpDmKPDnK3PLZLghpZ7cRF9des/5Rx7fh3lr07z95eeR2lb34+N+fj6t+3KOPb2w5yt3fP3a8VwG0lVSVWrTqpO6U6tSok+dKUHZnONb8HL3vP3bKXA7SsUoxrxjGKSjGNerFJLYklGyQ41rwcve8/dl5JaX/WV/9Fb3RxrXj7HL3vP3Yz4H6WaaeIi000069Zpp7U0460ONa8O8ve8/dowvALSFJt0p0aTepuFSdNtLYm4wVxx7fg5e95+7fLgdpV7a8X116r/lO8e37Q5Ppbs7z92mXALSD2zou/PUm/5CPEs/L9oXRHq42rn+ssK3BLSNJJcbBJ3so1aiXPsyosou0T0iGe7bu5zXOf3WXB/AYilxnHTz5smXzpTta9/SWrajtUxOyFNMxutyKQAAAAAAAAAAAAAAAAAAAG3C+nD50ftRGraUqO6HRmJ6TbCldXuBlxG8BxG8BxG8BxG8BxG8BxG8BxG8BxG8BxG8BxG8BxG8DVJWbQFXpvZDrZfY3lm9TtCpNDIAAAAAAAAAAAAAAAAAAAAA24X04fOj9qI1bSnR3Q6MxPRSqOxAZgAAAAAAAAAAABEqbX1gVem9kOtl9jeWb1O0Kk0MgAAAAAAAAAAAAAAAAAAAADbhfTh86P2ojVtKdHdDozE9FKo7EBmAAAAAAAAAAAAESptfWBV6b2Q62X2N5ZvU7QqTQyAAAAAAAAAAAAAAAAAAAAANuF9OHzo/aiNW0p0d0OjMT0UqjsQGYAAAAAAAAAAAARKm19YFXpvZDrZfY3lm9TtCpNDIAAAAAAAAAAAAAAAAAAAAA24X04fOj9qI1bSnR3Q6MxPRSqOxAZgAAAAAAAAAAABEqbX1gVem9kOtl9jeWb1O0Kk0MgAAAAAAAAAAAAAAAAAAAFX47h0H2onoR1Q3YHTEXVpRyPzpwW1cskiNdHwylRVGqHbnnvUbIVbK1gMuP3AOP3AOP3AOP3AOP3AOP3AOP3AOP3AOP3AOP3AOP3AaZO7bAo+FGMVKNJtN5nLZ1I0enjMyy+qnEQ57x3DoPtRq0MeqDx3DoPtQ0GqDx3DoPtQ0GqDx3DoPtQ0GqDx3DoPtQ0GqDx3DoPtQ0GqDx3DoPtQ0GqDx3DoPtQ0GqDx3DoPtQ0GqDx3DoPtQ0GqDx3DoPtQ0GqDx3DoPtQ0GqDx3DoPtQ0GqDx3DoPtQ0GqDx3DoPtQ0GqDx3DoPtQ0GqDx3DoPtQ0GqDx3DoPtQ0GqHK+Fz3dhaqzLOhj6kJRmrXhKMldcsXdX7BNMTGJIqmJyuvLfG+q7j94o5Who5u4eW+N9V3H7w5Wg5u4eW+N9V3H7w5Wg5u4eW+N9V3H7w5Wg5u4eW+N9V3H7w5Wg5u4eW+N9V3H7w5Wg5u4eW+N9V3H7w5Wg5u4eW+N9V3H7w5Wg5u4eW+N9V3H7w5Wg5u4eW+N9V3H7w5Wg5u4eW+N9V3H7w5Wg5u4eW+N9V3H7w5Wg5u4eW+N9V3H7w5Wg5u4eW+N9V3H7w5Wg5u4haT4R4jEKKqZLQbayxa28+snRaponoruX6q91f4XPd2FivJ4XPd2AzJ4XPd2AzJ4XPd2AzJ4XPd2AzJ4XPd2AzJ4XPd2AzJ4XPd2AzJ4XPd2AzJ4XPd2AzJ4XPd2AzJ4XPd2AzJ4XPd2AzJ4XPd2AzJ4XPd2AzJ4XPd2AzJ4XPd2AzJ4XPd2AzLQdRAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD//Z"
                   margin-left:auto;margin-right:auto;width:100%;"width="300" height="225" />
                </div>
                <div class="middle">
                  <h1>COMING SOON</h1>
                  <hr>
                  <p id="demo" style="font-size:30px"></p>
                </div>
                <div class="bottomleft">
                  <p>Hello!!!!</p>
                </div>
              </div>
              <script>
              // Set the date we're counting down to
              var countDownDate = new Date("May 1, 2021 08:00:00").getTime();
              // Update the count down every 1 second
              var countdownfunction = setInterval(function() {
                // Get todays date and time
                var now = new Date().getTime();
                // Find the distance between now an the count down date
                var distance = countDownDate - now;
                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                // Output the result in an element with id="demo"
                document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";
                // If the count down is over, write some text 
                if (distance < 0) {
                  clearInterval(countdownfunction);
                  document.getElementById("demo").innerHTML = "DONE";
                }
              }, 1000);
              </script>              
    </body>
</html>
