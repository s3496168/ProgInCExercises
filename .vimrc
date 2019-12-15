syntax on
set autoindent
set smartindent
set ts=4 sw=4 et si
set whichwrap +=<,>,[,]
set backspace=indent,eol,start
set hlsearch
set number
set mouse=a
set mousemodel=popup_setpos
set relativenumber
"colorscheme desert
"set foldmethod=syntax
"colorscheme cyberpunk
"colorscheme bw
"colorscheme colokschi-dark
"colorscheme nocturne
"colorscheme papaya
"colorscheme wolfpack
"colorscheme candy
colorscheme taffy
set ru
nmap <silent> ,, :let@/=""<CR>
let &colorcolumn=join(range(81,81),",")
execute pathogen#infect()
"autocmd vimenter * NERDTree
autocmd StdinReadPre * let s:std_in=1
autocmd VimEnter * if argc() == 1 && isdirectory(argv()[0]) && !exists("s:std_in") | exe 'NERDTree' argv()[0] | wincmd p | ene | endif
autocmd VimEnter * if argc() == 0 | exe 'NERDTree' | endif
autocmd vimenter * ClangFormatAutoEnable
noremap <C-J> <C-W><C-J>
noremap <C-K> <C-W><C-K>
noremap <C-L> <C-W><C-L>
noremap <C-H> <C-W><C-H>
set guifont="Monospace 8"
augroup CursorLine
    au!
    au VimEnter,WinEnter,BufWinEnter * setlocal cursorline
    "au VimEnter,WinEnter,BufWinEnter * setlocal cursorcolumn
    "au WinLeave * setlocal nocursorcolumn
    au WinLeave * setlocal nocursorline
augroup END

set statusline+=%#warningmsg#
set statusline+=%{SyntasticStatuslineFlag()}
set statusline+=%*

let g:syntastic_always_populate_loc_list = 1
let g:syntastic_auto_loc_list = 1
let g:syntastic_check_on_open = 1
let g:syntastic_check_on_wq = 0
let g:syntastic_compiler="gcc"
let g:systastic_compiler_flags="-ansi -Wall -pedantic -Werror"
