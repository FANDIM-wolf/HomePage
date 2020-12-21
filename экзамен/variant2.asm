;difference between odd numbers
mov ax,200
mov bx,2
mov cx,200
M1:
  dec ax  ;200-1
  push ax ;push in stack
  div bx  ;divide by 2
  mov bx,0
  cmp dx,bx ;left  number from division to compare with zero 
  jne M2    ; dx !=0
  je  M1    ; dx =0 
  hlt

M2:
  mov bx,ax 
  pop ax
  sub ax,bx
  push bx
  mov bx,2
  mov ax,cx
  jmp M1
  

      