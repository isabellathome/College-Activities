largura = float(input('Digite a largura da parede: '))
altura = float(input('Digite a altura da parede: '))
area = largura * altura
litros = area / 2
print('Sua parede tem a dimensão de {}x{} e sua área é de {}metros ao quadrado.'.format(largura, altura, area))
print('Pra pintar sua parede, você vai precisar de {}L'.format(litros))
