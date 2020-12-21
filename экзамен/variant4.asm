mov ax,3
mov cx,3 
mov bx,0
M1: 
  dec cx
  mul cx
  dec cx
  cmp cx,bx
  jne M1
  je  M2
M2:
  hlt  
