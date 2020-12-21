;summ of squads for numbers from 1 to 9 
mov ax,1
mov cx ,1
M1:
  mul ax   ;ax*ax
  mov bx,2 
  mul bx   ;ax*2
  push ax
  inc cx
  mov ax,cx
  mov bx,9
  cmp cx,bx
  jne M1
  je  M2
M2:
  hlt  
