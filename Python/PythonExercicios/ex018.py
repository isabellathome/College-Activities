import math
ang = float(input('Digite um ângulo: '))
seno = math.sin(math.radians(ang))
cos = math.cos(math.radians(ang))
tan = math.tan(math.radians(ang))
print('O seno do ângulo de {} é {:.2f} \nO cosseno do ângulo de {} é {:.2f} \nA tangente do ângulo de {} é {:.2f}.'.format(ang, seno, ang, cos, ang, tan))
