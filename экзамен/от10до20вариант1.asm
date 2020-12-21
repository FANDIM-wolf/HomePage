mov cx,20
mov bx,2
mov ax,20 
M1:
  mov ax,cx
  div bx 
  cmp dx,bx
  je M2
  jne M3
  
M2:
  push cx
  pop bx
  pop cx
  add bx,cx
  push bx
  mov bx,2
  dec cx
  cmp cx,0
  je M3
  jne M1
M3:
  hlt
 

  