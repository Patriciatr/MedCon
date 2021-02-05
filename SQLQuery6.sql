USE [medCon]
GO
/****** Object:  Table [dbo].[medico]    Script Date: 05/02/2021 22:19:58 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[medico](
	[medicoID] [int] IDENTITY(1,1) NOT NULL,
	[DNI] [varchar](13) NULL,
	[Password] [varchar](255) NULL,
	[Nombre] [varchar](255) NULL,
	[Apellidos] [varchar](255) NULL,
	[medicoJefe] [varchar](255) NULL,
PRIMARY KEY CLUSTERED 
(
	[medicoID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[paciente]    Script Date: 05/02/2021 22:19:59 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[paciente](
	[pacienteID] [int] IDENTITY(1,1) NOT NULL,
	[DNI] [varchar](13) NULL,
	[Password] [varchar](255) NULL,
	[Nombre] [varchar](255) NULL,
	[Apellidos] [varchar](255) NULL,
	[NumSS] [varchar](13) NULL,
	[Sexo] [varchar](255) NULL,
PRIMARY KEY CLUSTERED 
(
	[pacienteID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET IDENTITY_INSERT [dbo].[medico] ON 
GO
INSERT [dbo].[medico] ([medicoID], [DNI], [Password], [Nombre], [Apellidos], [medicoJefe]) VALUES (1, N'16040618D', N'QBB00OYR6WU', N'Pedro', N'Cortez', N'0')
GO
INSERT [dbo].[medico] ([medicoID], [DNI], [Password], [Nombre], [Apellidos], [medicoJefe]) VALUES (2, N'16820120G', N'CWV65NQL4MN', N'Lucia', N'Garrison', N'0')
GO
INSERT [dbo].[medico] ([medicoID], [DNI], [Password], [Nombre], [Apellidos], [medicoJefe]) VALUES (3, N'16440603H', N'IDJ87OKV1CK', N'Isadora', N'Robinson', N'1')
GO
INSERT [dbo].[medico] ([medicoID], [DNI], [Password], [Nombre], [Apellidos], [medicoJefe]) VALUES (4, N'16370510K', N'FNX45JDV9RE', N'Maia', N'Anderson', N'0')
GO
SET IDENTITY_INSERT [dbo].[medico] OFF
GO
SET IDENTITY_INSERT [dbo].[paciente] ON 
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (1, N'16541029Q', N'DQE22GUC2TA', N'Brittany', N'Barnes', N'169609179214', N'Mujer')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (2, N'16280120W', N'SLN81MJH8LP', N'Roman', N'Perez', N'165801229187', N'Hombre')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (3, N'16690206E', N'VHP92GEC7HG', N'Maria', N'Gonzales', N'161909083857', N'Mujer')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (4, N'16730807R', N'OXV90QGB6MS', N'Lorena', N'Jensen', N'163405128053', N'Mujer')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (5, N'16250403T', N'IQU02MFG8UI', N'Manuel', N'Delacruz', N'166707245020', N'Hombre')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (6, N'16241211Y', N'XZI93FAJ2QX', N'Clara', N'Vargas', N'169610139215', N'Mujer')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (7, N'16321002U', N'FJM60PHZ4JL', N'Ana', N'Pittman', N'162104188459', N'Mujer')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (8, N'16210308I', N'JSL96BKJ9PY', N'Matilda', N'Walton', N'165703122696', N'Mujer')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (9, N'16320930O', N'JJN26HZN6DN', N'Kiara', N'Martin', N'162804306625', N'Mujer')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (10, N'16360120P', N'ZFC60MTE3CF', N'Darrel', N'Larson', N'168705024233', N'Mujer')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (11, N'16000916A', N'AAZ51GTN8YV', N'Antonio', N'Hopkins', N'162010104772', N'Hombre')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (12, N'16131206S', N'OBM99EBS6WN', N'Pedro', N'Kent', N'163810223085', N'Hombre')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (13, N'16570422D', N'OWJ52WXL6MH', N'Tad', N'Ochoa', N'160208292946', N'Hombre')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (14, N'16260403F', N'OQL04TQN0EE', N'Daniel', N'Garcia', N'164402205530', N'Hombre')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (15, N'16471212G', N'BPK87FPC6QS', N'Summer', N'Mann', N'169911052554', N'Mujer')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (16, N'16880630H', N'KMV36HIO1QK', N'Lucia', N'Frazier', N'163107050498', N'Mujer')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (17, N'16480712J', N'INH45BTW6QW', N'Daniel', N'Glass', N'169409171999', N'Hombre')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (18, N'16100301K', N'QNG07TYR2UN', N'Carolina', N'Lee', N'162909156180', N'Mujer')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (19, N'16950101L', N'VRW31CVS6RG', N'Jackson', N'Small', N'164410140117', N'Hombre')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (20, N'16700830Z', N'FLC41LIL1BS', N'Victoria', N'Reilly', N'164708245198', N'Mujer')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (21, N'16580529X', N'PXX88AHX6YF', N'Airan', N'Valverde', N'167909037256', N'Hombre')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (22, N'16020721C', N'FLZ48WFX1AV', N'Neville', N'Oneal', N'165606033180', N'Hombre')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (23, N'16780709V', N'JJY85DUX7SQ', N'Kenia', N'Nielsen', N'165405196568', N'Mujer')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (24, N'16721201B', N'JLQ72ZWZ5GA', N'Andrea', N'Mendez', N'164603192172', N'Mujer')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (25, N'16690928N', N'COT76ZXR1IO', N'Taylor', N'Swift', N'160909110983', N'Mujer')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (26, N'16430830M', N'MUG05BKI6XN', N'Ronaldo', N'Todd', N'169407097626', N'Hombre')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (27, N'16120727Q', N'RVO45NIS9JT', N'Mao', N'Lang', N'165703298124', N'Hombre')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (28, N'16521226E', N'NAF46AHV5FC', N'Ines', N'Whitehead', N'165707266689', N'Mujer')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (29, N'16601022R', N'LHW41ZNV2LK', N'Calvin', N'Coleman', N'168503242995', N'Hombre')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (30, N'16520527T', N'BXM55GFW2RI', N'Eva', N'Gibbs', N'168707280916', N'Mujer')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (31, N'16640714Y', N'SND40PSW6LG', N'Elena', N'Campos', N'160906068986', N'Mujer')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (32, N'16871121U', N'LWC72WMJ0NZ', N'Mara', N'Coffey', N'167309193790', N'Mujer')
GO
INSERT [dbo].[paciente] ([pacienteID], [DNI], [Password], [Nombre], [Apellidos], [NumSS], [Sexo]) VALUES (33, N'16881007D', N'VWY25OWC5BK', N'Lara', N'Giles', N'162912262876', N'Mujer')
GO
SET IDENTITY_INSERT [dbo].[paciente] OFF
GO
