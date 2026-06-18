#!/usr/bin/env python3
"""Genera el PDF del enunciado del examen4 RoomTrack."""

import os
from fpdf import FPDF

FONT_DIR = r"C:\Windows\Fonts"
OUTPUT = "Examen4.pdf"


class PDF(FPDF):
    def header(self):
        self.set_font("Segoe", "", 9)
        self.cell(0, 8, "DWES — 2025/2026        IES Trafalgar        UT 5, 6 y 7", align="R", new_x="LMARGIN", new_y="NEXT")
        self.ln(2)

    def footer(self):
        self.set_y(-15)
        self.set_font("Segoe", "", 8)
        self.cell(0, 10, f"Página {self.page_no()}", align="C")

    def titulo(self, texto: str):
        self.set_font("Segoe", "B", 16)
        self.cell(0, 10, texto, align="C", new_x="LMARGIN", new_y="NEXT")
        self.ln(4)

    def subtitulo(self, texto: str):
        self.set_font("Segoe", "B", 13)
        self.cell(0, 9, texto, new_x="LMARGIN", new_y="NEXT")
        self.ln(1)

    def parrafo(self, texto: str):
        self.set_font("Segoe", "", 11)
        self.multi_cell(0, 6, texto)
        self.ln(2)

    def lista(self, items):
        self.set_font("Segoe", "", 11)
        for item in items:
            x = self.l_margin + 6
            self.set_x(x)
            ancho = self.w - self.r_margin - x
            self.multi_cell(ancho, 6, f"\u2022 {item}")
        self.ln(2)


def main():
    pdf = PDF()
    pdf.add_font("Segoe", "", os.path.join(FONT_DIR, "segoeui.ttf"))
    pdf.add_font("Segoe", "B", os.path.join(FONT_DIR, "segoeuib.ttf"))
    pdf.set_auto_page_break(auto=True, margin=20)
    pdf.add_page()

    pdf.titulo('Examen — Plataforma: Sistema de Gestión de Reservas de Salas de Reuniones "RoomTrack"')

    pdf.set_font("Segoe", "", 9)
    pdf.multi_cell(
        0,
        5,
        "ACLARACIONES: No se permite el uso de internet más allá del manual de PHP o la Moodle "
        "para acceder a la tarea correspondiente. Las pantallas deberán grabarse desde el inicio de "
        "la prueba. No se corregirá ninguna prueba que no incluya el correspondiente vídeo en el "
        "que se muestre la realización completa del examen. La no entrega del vídeo junto con la "
        "prueba o la detección de cualquier actividad sospechosa supondrá la calificación de "
        "suspenso automático. Se valorará, además de la funcionalidad del programa, la calidad "
        "del código, claridad, legibilidad, indentaciones, uso de nombres apropiados, modularidad, "
        "limpieza del código, organización general y buenas prácticas de programación.\n\n"
        "Se entregará todo comprimido en un zip en la propia tarea creada en la Moodle.",
    )
    pdf.ln(4)

    pdf.subtitulo("Contexto")
    pdf.parrafo(
        'El centro de negocios "RoomTrack" necesita una aplicación interna para gestionar las reservas de sus salas de reuniones. '
        "El sistema permite que los usuarios consulten las salas disponibles y hagan reservas, mientras que "
        "los administradores pueden dar de alta nuevas salas y gestionar las liberaciones.\n\n"
        "Se proporciona el esquema de base de datos (database.sql) y un modelo HTML con estilos tanto para "
        "el login como el dashboard (login.php y dashboard.php). Además, la expresión regular para validar "
        "el email (otros.txt)."
    )

    # Apartado 1
    pdf.subtitulo("Apartado 1 — Arquitectura de clases (1.5 puntos)")
    pdf.parrafo(
        "Diseña un modelo de clases en un archivo llamado clases.php que cumpla con:"
    )
    pdf.lista([
        "Una interfaz, IInformable, para estandarizar la salida de información de los objetos, es decir, con un método getResumen().",
        "Una clase base, Espacio, que gestione los datos comunes: nombre y capacidad. Tendrá el método getResumen() como abstracto.",
        "Una clase derivada, Sala, que gestione el estado de la sala y determine visualmente su situación en la tabla del panel.",
    ])
    pdf.parrafo(
        "La clase Sala tendrá como atributo privado: estado (valores: Libre y Reservada).\n\n"
        "Método getResumen(): Devuelve el nombre en mayúsculas y el estado entre corchetes. Ejemplo:\n"
        "NUEVA SALA: Sala Atenas [Libre]\n\n"
        "Método getEstilo(): Devuelve una cadena de estilos. Si la sala está libre, fondo verde; "
        "si está reservada, fondo naranja. (Mirar archivo: otros.txt).\n\n"
        "Nota: No es obligatorio implementar los métodos Getter ni Setter en ninguna clase."
    )

    # Apartado 2
    pdf.subtitulo("Apartado 2 — Autenticación (1.5 puntos)")
    pdf.parrafo(
        "Debes implementar un sistema de autenticación (login.php) que proteja el acceso al panel usando "
        "sentencias preparadas. Además, tras iniciar sesión con éxito, el sistema debe recordar (durante 24h) "
        "el último correo electrónico utilizado para iniciar sesión mediante mecanismos de persistencia en el "
        "cliente y que se mostrará automáticamente en el campo del formulario al volver a entrar."
    )

    # Apartado 3
    pdf.subtitulo("Apartado 3 — Dashboard (2 puntos)")
    pdf.parrafo("En dashboard.php, el listado de salas debe cumplir:")
    pdf.lista([
        "Muestre un listado completo que muestre: nombre, capacidad y estado.",
        "Los administradores deben ver todas las salas, mientras que el resto de usuarios solo verán aquellas que estén libres.",
        "Se aplique la lógica de estilos definida en las clases para diferenciar cada fila de la tabla.",
    ])

    # Apartado 4
    pdf.subtitulo("Apartado 4 — Lógica de reservas (2 puntos)")
    pdf.lista([
        "Alta de salas (admin): Será quien registre nuevas salas. Al finalizar, mostrará el resumen de la sala creada.",
        "Reserva de salas (usuario): Permite a los usuarios marcar una sala libre como reservada.",
        "Liberación de salas (admin): Permite a los administradores marcar una sala reservada como libre de nuevo.",
    ])

    # Apartado 5
    pdf.subtitulo("Apartado 5 — Seguridad y código (1.5 puntos)")
    pdf.parrafo(
        "Se deberá garantizar un flujo de navegación seguro mediante el uso correcto de sesiones y cookies "
        "(si las hubiese), asegurando que el acceso al panel esté estrictamente protegido y que las redirecciones "
        "se ejecuten de forma coherente en todo momento. Se exigirá una implementación impecable de la seguridad "
        "en las consultas. Asimismo, se valorará la calidad interna del código, la cual debe destacar por una "
        "indentación limpia, una organización modular lógica y una semántica apropiada en el nombrado de variables "
        "y funciones. Finalmente, el programa deberá ejecutarse de manera fluida y profesional."
    )

    # Adicional
    pdf.subtitulo("Adicional — Token de Seguridad Anti-F5 (+0.5 puntos extra)")
    pdf.parrafo(
        "Optimiza el formulario de alta de salas para evitar la duplicidad de datos producida por el refresco "
        "accidental de la página (F5) o reenvíos del navegador. El sistema debe invalidar la petición una vez "
        "procesada correctamente, es decir, al registrar una nueva sala."
    )

    pdf.output(OUTPUT)
    print(f"PDF generado: {OUTPUT}")


if __name__ == "__main__":
    main()
