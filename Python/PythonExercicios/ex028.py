from random import randint
from time import sleep
print('-=-' * 17)
print('Vou pensar em um número entre 0 a 5. Tente adivinhar...')
n = randint(0, 5)
print('-=-' * 17)
num = int(input('Em que número eu pensei? '))
print('PROCESSANDO...')
sleep(2)
if n == num:
    print('PARABÉNS! Você conseguiu me vencer!')
else:
    print('GANHEI! Eu pensei no número {} e não no {}!'.format(n, num))
