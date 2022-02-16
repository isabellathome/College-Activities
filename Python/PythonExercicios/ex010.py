real = float(input('Digite o valor que você tem na carteira: R$'))
dolar = real / 3.27
print('Com R${:.2f}, você pode comprar US{:.2f}'.format(real, dolar))