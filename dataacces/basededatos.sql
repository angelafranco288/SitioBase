-- MySQL Workbench Synchronization
-- Generated: 2021-05-21 19:18
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: AngelaFranco

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS BDSitio DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci ;

CREATE TABLE IF NOT EXISTS BDSitio.usuarios (
  nombreUsuario VARCHAR(20) NOT NULL,
  Identificacion VARCHAR(45) NOT NULL,
  primerNombre VARCHAR(30) NOT NULL,
  segundoNombre VARCHAR(30) NULL DEFAULT NULL,
  primerApellido VARCHAR(30) CHARACTER SET 'armscii8' NOT NULL,
  segundoApellido VARCHAR(30) NULL DEFAULT NULL,
  Email VARCHAR(70) NOT NULL,
  celular VARCHAR(15) NOT NULL,
  direccion VARCHAR(300) NULL DEFAULT NULL,
  perfilUsuario INT(11) NOT NULL,
  clave VARCHAR(45) NOT NULL,
  estadoUsuario BIT(1) NOT NULL,
  usuarioCreacion VARCHAR(15) NOT NULL,
  fechaCreacion DATETIME NOT NULL,
  usuariosModificacion VARCHAR(15) NULL DEFAULT NULL,
  fechaModificacion DATETIME NULL DEFAULT NULL,
  INDEX indx_identificacion_usuario (Identificacion ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;

CREATE TABLE IF NOT EXISTS BDSitio.Productos (
  codigoProducto VARCHAR(15) NOT NULL,
  nombreProducto VARCHAR(150) NOT NULL,
  descripcionProducto VARCHAR(200) NULL DEFAULT NULL,
  unidadMedida VARCHAR(45) NOT NULL,
  marcaProducto VARCHAR(45) NULL DEFAULT NULL,
  precioActual FLOAT(11) NOT NULL DEFAULT 0,
  cantidadActual INT(11) NOT NULL DEFAULT 0,
  estadoProducto BIT(1) NULL DEFAULT NULL,
  usuarioCreacion VARCHAR(45) NOT NULL,
  fechaCreacion DATETIME NOT NULL,
  usuarioModificacion VARCHAR(15) NULL DEFAULT NULL,
  fechaModificacion DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (codigoProducto),
  INDEX indx_nombre_producto (nombreProducto ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;

CREATE TABLE IF NOT EXISTS BDSitio.Terceros (
  IdentificacionTercero VARCHAR(25) NOT NULL,
  nombreTercero VARCHAR(255) NOT NULL,
  emailTercero VARCHAR(45) NULL DEFAULT NULL,
  celularTercero VARCHAR(45) NULL DEFAULT NULL,
  direccionTercero VARCHAR(200) NULL DEFAULT NULL,
  descripcion VARCHAR(200) NULL DEFAULT NULL,
  estadoTercero BIT(1) NOT NULL,
  esCliente BIT(1) NOT NULL,
  esProveedor BIT(1) NOT NULL,
  contactoTercero VARCHAR(100) NULL DEFAULT NULL,
  usuarioCreacion VARCHAR(45) NOT NULL,
  fechaCreacion DATETIME NOT NULL,
  usuarioModificacion VARCHAR(45) NULL DEFAULT NULL,
  fechaModificacion DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (IdentificacionTercero),
  INDEX indx_nombre_tercero (nombreTercero ASC),
  INDEX indx_descripcion_tercero (descripcion ASC),
  INDEX indx_contacto_tercero (contactoTercero ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;

CREATE TABLE IF NOT EXISTS BDSitio.compraVenta (
  idcompraVenta INT(11) NOT NULL,
  fechaCompraVenta VARCHAR(45) NOT NULL,
  CantidadCompreVenta INT(11) NOT NULL,
  tipoPago TINYINT(1) NOT NULL,
  tipoOperacion BIT(1) NOT NULL,
  estadoCompraVenta VARCHAR(45) NOT NULL,
  conceptoCompraVenta VARCHAR(255) NOT NULL,
  usuarioCreacion VARCHAR(15) NULL DEFAULT NULL,
  fechaCreacion DATETIME NULL DEFAULT NULL,
  usuarioModificacion VARCHAR(45) NULL DEFAULT NULL,
  fechaModificacion DATETIME NULL DEFAULT NULL,
  IdentificacionTercero VARCHAR(25) NOT NULL,
  PRIMARY KEY (idcompraVenta),
  INDEX indx_fecha_CompraVenta (fechaCompraVenta ASC),
  INDEX fk_compraVenta_Terceros1_idx (IdentificacionTercero ASC),
  CONSTRAINT fk_compraVenta_Terceros1
    FOREIGN KEY (IdentificacionTercero)
    REFERENCES BDSitio.Terceros (IdentificacionTercero)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;

CREATE TABLE IF NOT EXISTS BDSitio.ProductosPorCompraVenta (
  idProductosPorCompraVenta BIGINT(11) NOT NULL,
  CodigoProducto VARCHAR(15) NOT NULL,
  idcompraVenta INT(11) NOT NULL,
  EstadoProductosPorCompraVentacol VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (idProductosPorCompraVenta),
  INDEX fk_compraVenta_has_Productos_Productos1_idx (idCompraVenta ASC),
  INDEX fk_compraVenta_has_Productos_compraVenta_idx (CodigoProducto ASC),
  CONSTRAINT fk_compraVenta_has_Productos_compraVenta
    FOREIGN KEY (CodigoProducto)
    REFERENCES BDSitio.Productos (codigoProducto)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT fk_compraVenta_has_Productos_Productos1
    FOREIGN KEY (idCompraVenta)
    REFERENCES BDSitio.compraVenta (idcompraVenta)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;