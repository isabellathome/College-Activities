import random
alu1 = input('Primeiro Aluno: ')
alu2 = input('Segundo Aluno: ')
alu3 = input('Terceiro Aluno: ')
alu4 = input('Quarto Aluno: ')
alunos = (alu1, alu2, alu3, alu4)
escolhido = random.choice(alunos)
print('O aluno escolhido foi {}'.format(escolhido))
