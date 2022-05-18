function calcularFinanciacion(precioLitro, comision, cantidad, meses) {
    switch (meses) {
        case 3:
        default:
            intereses = 0.341447;
            break;
        case 4:
            intereses = 0.256987;
            break;
        case 5:
            intereses = 0.206313;
            break;
        case 6:
            intereses = 0.172531;
            break;
        case 7:
            intereses = 0.148403;
            break;
        case 8:
            intereses = 0.130307;
            break;
        case 9:
            intereses = 0.116234;
            break;
        case 10:
            intereses = 0.104976;
            break;
        case 11:
            intereses = 0.095766;
            break;
        case 12:
            intereses = 0.088092;
            break;
    }
    
    const totalMes = (precioLitro + comision) * cantidad * intereses;
    const total = totalMes * meses;
    const precioLitroFinaciado = total/cantidad;

    return { precioLitroFinaciado, total, intereses }
}