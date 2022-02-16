from math import sqrt, hypot
'''catop = float(input('Comprimento do Cateto Oposto: '))
catad = float(input('Comprimento do Cateto Adjacente: '))
ctop = catop * catop
cad = catad * catad
h = ctop + cad
print('A hipotenusa vai medir {:.2f}'.format(sqrt(h)))'''


catop = float(input('Comprimento do Cateto Oposto: '))
catad = float(input('Comprimento do Cateto Adjacente: '))
hip = hypot(catop, catad)
print('A hipotenusa vai medir {:.2f}'.format(hip))

