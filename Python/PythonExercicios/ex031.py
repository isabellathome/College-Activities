dis = float(input('Qual é a distância da sua viagem? '))
print('Você está prestes a começar sua viagem de {:.2f}Km.'.format(dis))
if dis <= 200:
    valor = 0.50 * dis
else:
    valor = 0.45 * dis
print('E o preço da sua passagem será de R${:.2f}'.format(valor))
