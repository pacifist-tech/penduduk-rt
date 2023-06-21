<nav class="flex w-full items-center justify-between border-b bg-white py-6 px-10">
          <h1 class="text-xl font-medium text-slate-900">{{ isset($title) ? $title : '' }}</h1>
          <div class="flex items-center gap-6">
              <button><i class="bi bi-envelope-fill text-slate-300"></i></button> <button><i
                      class="bi bi-bell-fill text-slate-300"></i></button>

              <div class="flex gap-3 items-center"> <span class="text-sm text-slate-600">Namanya</span>
                  <button><i class="bi bi-chevron-down text-slate-600"></i></button>
              </div>

          </div>
      </nav>