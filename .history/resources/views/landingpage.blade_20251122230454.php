<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/theme.css')
    <title>Materi — Gestura</title>
  </head>

  <body>
    <div class="min-h-screen bg-background">

      <!-- NAVBAR -->
      <nav class="border-b border-border/50 backdrop-blur-lg sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
          <div class="flex items-center gap-2">
            <div class="h-10 w-10 rounded-xl bg-primary flex items-center justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" 
                class="lucide lucide-graduation-cap h-6 w-6 text-primary-foreground" stroke-width="2"
                stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"/>
                <path d="M22 10v6"></path>
                <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
              </svg>
            </div>
            <span class="text-2xl font-bold text-gradient">Gestura</span>
          </div>

          <div class="flex gap-3">
            <a href="/dashboard">
              <button class="hover:bg-accent hover:text-accent-foreground h-11 px-6 rounded-md text-sm font-medium">
                Dashboard
              </button>
            </a>
          </div>
        </div>
      </nav>

      <!-- HEADER -->
      <section class="container mx-auto px-4 py-16 text-center">
        <h1 class="text-5xl md:text-6xl font-bold mb-4">
          Materi <span class="text-gradient">Pembelajaran</span>
        </h1>
        <p class="text-muted-foreground text-lg max-w-2xl mx-auto">
          Pilih materi untuk mulai belajar bahasa isyarat secara interaktif.
        </p>
      </section>

      <!-- LIST MATERI -->
      <section class="container mx-auto px-4 pb-24">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

          <!-- Card: Abjad -->
          <a href="/materi/abjad">
            <div class="p-6 rounded-lg border border-border/50 bg-card hover:border-primary/50 hover-glow transition cursor-pointer">
              <div class="h-12 w-12 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                <div class="text-3xl">🔤</div>
              </div>
              <h3 class="text-xl font-bold mb-1">Abjad</h3>
              <p class="text-muted-foreground text-sm">Pelajari bentuk huruf A–Z dalam bahasa isyarat.</p>
            </div>
          </a>

          <!-- Card: Angka -->
          <a href="/materi/angka">
            <div class="p-6 rounded-lg border border-border/50 bg-card hover:border-primary/50 hover-glow transition cursor-pointer">
              <div class="h-12 w-12 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                <div class="text-3xl">🔢</div>
              </div>
              <h3 class="text-xl font-bold mb-1">Angka</h3>
              <p class="text-muted-foreground text-sm">Belajar angka 0–100 dengan gerakan tangan.</p>
            </div>
          </a>

          <!-- Card: Kosakata -->
          <a href="/materi/kosakata">
            <div class="p-6 rounded-lg border border-border/50 bg-card hover:border-primary/50 hover-glow transition cursor-pointer">
              <div class="h-12 w-12 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                <div class="text-3xl">📘</div>
              </div>
              <h3 class="text-xl font-bold mb-1">Kosakata</h3>
              <p class="text-muted-foreground text-sm">Belajar kata sehari-hari seperti salam, makanan, emosi, dll.</p>
            </div>
          </a>

          <!-- Card: Imbuhan -->
          <a href="/materi/imbuhan">
            <div class="p-6 rounded-lg border border-border/50 bg-card hover:border-primary/50 hover-glow transition cursor-pointer">
              <div class="h-12 w-12 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                <div class="text-3xl">📝</div>
              </div>
              <h3 class="text-xl font-bold mb-1">Imbuhan</h3>
              <p class="text-muted-foreground text-sm">Pelajari awalan, akhiran, dan pola perubahan makna.</p>
            </div>
          </a>

          <!-- Card: Gesture Lab -->
          <a href="/gesture-lab">
            <div class="p-6 rounded-lg border border-border/50 bg-card hover:border-primary/50 hover-glow transition cursor-pointer">
              <div class="h-12 w-12 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                <div class="text-3xl">🤟</div>
              </div>
              <h3 class="text-xl font-bold mb-1">Gesture Lab</h3>
              <p class="text-muted-foreground text-sm">Latih kemampuanmu dengan AI gesture recognition.</p>
            </div>
          </a>

          <!-- Card: Quiz -->
          <a href="/quiz">
            <div class="p-6 rounded-lg border border-border/50 bg-card hover:border-primary/50 hover-glow transition cursor-pointer">
              <div class="h-12 w-12 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
                <div class="text-3xl">🏆</div>
              </div>
              <h3 class="text-xl font-bold mb-1">Quiz</h3>
              <p class="text-muted-foreground text-sm">Uji pemahamanmu berdasarkan materi yang sudah dipelajari.</p>
            </div>
          </a>

        </div>
      </section>

    </div>
  </body>
</html>
