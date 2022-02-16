salario = float(input('Qual é o sálario do funcionario? R$'))
# aumento = salario * 0.15
novo = salario + (salario * 15 / 100)
print('Um funcionário que ganhava R${}, com 15% de aumento, passa a receber R${:.2f}'.format(salario, novo))